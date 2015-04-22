#encoding: utf-8
#
###
### Controle da API do site.
###
#
# ===== API =====
#
#   [POST] /api/v1/cotacao
#      Essa rota recebe um parâmetro chamado "amount" via POST, que é a
#      quantidade de bitcoins para qual se deseja saber a cotação / valor.
#      Essa API retornará um objeto JSON com os seguintes atributos:
#
#         @requestedAmount: a quantidade de bitcoins enviada por quem
#         fez a requisição à API. Ou seja, requestedAmount == amount (o que
#         foi enviado como parâmetro via POST). Valor padrão é 1.0 BTC.
#
#         @amount: a quantidade de bitcoins para o preço (@price) retornado
#         pela API. Normalmente esse atributo tem o mesmo valor que o atributo
#         "@requestedAmount", exceto quando o quantidade de bitcoins solicitada
#         por quem chamou a API é maior do que a quantidade de bitcoins
#         disponível para venda na exchange. Um cenário para esse caso seria:
#
#             Requisição: amount=51
#             Resposta: {@requestedAmount: 51, @amount: 40, @price: 10500.00}
#
#             Nesse caso, a quantidade de bitcoins pedida por quem chamou a
#             API foi de 51 BTC. A exchange só tinha 40 BTC, por isso
#             amount=40 e é diferente de @requestedAmount=51.
#             O preço de R$10.500,00 retornado diz respeito aos 40 bitcoins
#             disponíveis na exchange, ou seja, diz respeito ao atributo
#             @amount.
#
#         Seu valor padrão é 1.0 BTC.
#
#
#         @price: o preço da quantidade de bitcoins retornada (@amount).
#         Esse preço é obtido SOMENTE através das ordens existentes
#         no orderbook da Foxbit. Leva em conta o preço de cada ordem e
#         a quantidade de bitcoins disponível para essa ordem; caso não tenha
#         totalizado a quantidade de bitcoins solicitada, pega a próxima ordem
#         do orderbook da Foxbit - e assim por diante.
#
#
##
class Api::ApiController < ActionController::Metal

    include AbstractController::Callbacks
    include ActionController::RespondWith
    include AbstractController::Rendering
    include ActionView::Layouts
    include ActionController::Renderers::All
    append_view_path "#{Rails.root}/app/views"

    # Gem para fazer requisições à API's
    require 'httparty'
    respond_to :json

    # POST /api/cotacao (params: { amount: x.xx })
    # Recebe como parâmetro uma quantidade de bitcoins (parâmetro "amount") e calcula, de acordo com a orderbook da Foxbit, quanto custa essa quantidade de Bitcoin levando em consideração as ordens de venda existentes no orderbook.
    def cotacao

        # Pegando o número de bitcoins desejados.
        requestedBtcAmount = params[:amount] || 1.0
        requestedBtcAmount = requestedBtcAmount.to_f

        # Acessando API da Foxbit para pegar orderbook.
        response = HTTParty.get "https://api.blinktrade.com/api/v1/BRL/orderbook?crypto_currency=BTC"

        # Interpretando o JSON
        orderbook = JSON.parse(response.body)
        asks = orderbook["asks"]

        # Debug
        # logger.debug(asks)

        # Algoritmo que faz a média de valor do número de Bitcoins a serem comprados.
        generalBtcAmount = 0.0
        finalPrice = 0.0

        asks.each do |ask|

          # Calcula quantos bitcoins faltam para serem adicionados ao cálculo e caso ainda existam, utiliza o próximo Ask.
          remainingBtcAmount = truncate(requestedBtcAmount - generalBtcAmount)

          if remainingBtcAmount > 0

            # Calcula quantos BTC's da ask atual precisam ser adicionados à quantidade geral de Bitcoins (se todos os btc da ask atual ou se apenas uma parte dos btc's dessa ask).
            if truncate(generalBtcAmount + ask[1]) >= requestedBtcAmount
              tempAmount = remainingBtcAmount
            else
              tempAmount = ask[1]
            end

            # Soma a quantidade de bitcoins desse ask à quantidade geral de bitcoins (somente a quantidade necessária de BTC).
            generalBtcAmount = truncate(generalBtcAmount + tempAmount)

            # Soma ao preço final do Bitcoin o valor da ask atual * quantidade de bitcoins oferecidos pela ask atual.
            finalPrice += ask[0] * tempAmount

            # Debug
            # logger.debug("Quantidade[i]: #{tempAmount}\t\tPreço[i]: #{ask[0]}\t\tRestante[i]: #{remainingBtcAmount}\t\tGeneralBtcAmount[i]: #{generalBtcAmount}")

          else

            # Debug
            # logger.debug("==========ELSE===========")
            # logger.debug("Quantidade requerida: #{requestedBtcAmount}")
            # logger.debug("Quantidade final: #{generalBtcAmount}")
            # logger.debug("Quantidade restante: #{remainingBtcAmount}")
            break
          end
        end

        # Trunca o valor final dos bitcoins para 2 casas decimais (mais legível)
        finalPrice = truncate(finalPrice,2)

        # Montando o JSON para renderizar na página
        finalJson = {
          :requestedAmount => requestedBtcAmount,
          :amount => truncate(generalBtcAmount,2),
          :price => finalPrice
        }.to_json

        # Debugs
        # logger.debug("=========FINAL=========")
        # logger.debug("Preço final: R$#{finalPrice}")
        # logger.debug("Quantidade requerida: #{requestedBtcAmount}")
        # logger.debug("Quantidade final: #{generalBtcAmount}")
        # logger.debug(finalJson)

        # Renderizando o valor final na página em formato de JSON
        render json: finalJson

    end

    private
        # Método responsável por truncar números de ponto flutuante.
        # O truncamento padrão é quebrar o número na 8ª casa decimal: 1.1234567891011 para 1.12345678, mas um argumento pode ser passado informando um número de casas decimais diferente.
        def truncate(number, decimalCases = 8)
            temp = 1.0
            while decimalCases > 0 do
              temp = temp * 10.0
              decimalCases -= 1
            end
            return (number * temp.to_i).floor / temp
        end

end
