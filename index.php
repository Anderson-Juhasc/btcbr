<!DOCTYPE HTML>
<html lang="pt-br" ng-app="app">
<head>
    <title>BTCBRL - Conversor Bitcoin para Real Brasileiro</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta Tags -->
    <meta name="author" content="Anderson Juhasc" />
    <meta name="description" content="" />
    <meta name="keywords" content="conversor, cotacao, bitcoin, valor, preco, custa, btcbr, btc, brl, btcbrl">

    <!-- Dublin Core -->
    <meta name="DC.Title" content="BTCBRL - Bitcoin Conversor">
    <meta name="DC.Creator" content="Anderson Juhasc" />
    <meta name="DC.Subject" content="Conversor Bitcoin para Real Brasileiro" />
    <meta name="DC.Description" content="" />
    <meta name="DC.Publisher" content="Anderson Juhasc" />
    <meta name="DC.Contributor" content="Anderson Juhasc" />
    <meta name="DC.Date" content="2015-04" />
    <meta name="DC.Type" content="service" />
    <meta name="DC.Format" content="text/html" />
    <meta name="DC.Identifier" content="http://btcbrl.info/"/>
    <meta name="DC.Source" content="https://github.com/Anderson-Juhasc/btcbr" />
    <meta name="DC.Language" content="pt-BR" />
    <meta name="DC.Relation" content="https://github.com/Anderson-Juhasc/btcbr" scheme="IsPartOf" />
    <meta name="DC.Coverage" content="São Paulo, Brazil" />
    <meta name="DC.Rights" content="Copyleft 2015, Anderson Juhasc. Nenhum direito reservado." />

    <!-- Facebook -->
    <meta property="og:title" content="BTCBRL - Bitcoin Conversor" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="Conversor Bitcoin para Real Brasileiro" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="BTCBRL - Bitcoin Conversor" />
    <meta name="twitter:description" content="Conversor Bitcoin para Real Brasileiro" />
    <meta name="twitter:image" content="" />

    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/angular-loading-bar/0.7.1/loading-bar.min.css' />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- .head -->
    <header class="head">
        <!-- .head-top -->
        <div class="head-top">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .head__logo -->
                <a href="" ui-sref="home" class="head__logo">
                    <i class="icon-loop"></i> BTCBRL
                </a>
                <!-- /.head__logo -->

                <!-- .head-btn -->
                <a href="" id="head-btn" class="head-btn">
                    <i class="icon-cog"></i>
                </a>
                <!-- /.head-btn -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.head-top -->

        <!-- .head-collapse -->
        <div class="head-collapse">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .head-box -->
                <div class="head-box">
                    <a href="" ui-sref="home" class="head-box__title">
                        BitValor
                    </a>
                </div>
                <!-- /.head-box -->

                <!-- .head-box -->
                <div class="head-box">
                    <a href="" ui-sref="bitcointoyou" class="head-box__title">
                        BitcoinToYou
                    </a>
                </div>
                <!-- /.head-box -->

                <!-- .head-box -->
                <div class="head-box">
                    <a href="" ui-sref="foxbit" class="head-box__title">
                        FoxBit
                    </a>
                </div>
                <!-- /.head-box -->

                <!-- .head-box -->
                <div class="head-box">
                    <a href="" ui-sref="mercadobitcoin" class="head-box__title">
                        Mercado Bitcoin
                    </a>
                </div>
                <!-- /.head-box -->

                <!-- .head-box -->
                <div class="head-box">
                    <a href="" ui-sref="flowbtc" class="head-box__title">
                        FlowBTC
                    </a>
                </div>
                <!-- /.head-box -->

                <!-- .head-box -->
                <div class="head-box">
                    <a href="" ui-sref="negociecoins" class="head-box__title">
                        NegocieCoins
                    </a>
                </div>
                <!-- /.head-box -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.head-collapse -->
    </header>
    <!-- /.head -->

    <!-- .main -->
    <div class="main" ui-view></div>
    <!-- /.main -->

    <script src="/app/bundle/app.js"></script>
</body>
</html>
