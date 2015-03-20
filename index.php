<?php include 'functions.php'; ?>

<?php include 'partials/header.php'; ?>

<!-- .wrapper -->
<div class="wrapper">
    <h1>
        <a href="/">Cotação Bitcoin</a>
    </h1>

    <!-- .main -->
    <div class="main">
        <!-- .main__cell -->
        <div class="main__cell">
            <h2 class="main__title">Média do Mercado</h2>
            <!-- .rate -->
            <div id="average" class="rate">
                <!-- .rate__cell -->
                <div class="rate__cell">
                    <input id="btc-value" value="1" type="text" class="rate__input" />
                    BTC
                </div>
                <!-- /.rate__cell -->

                <!-- .rate__cell -->
                <div class="rate__cell">
                    =
                </div>
                <!-- /.rate__cell -->

                <!-- .rate__cell -->
                <div class="rate__cell">
                    <input id="brl-value" value="<?php echo $AVG; ?>" data-val="<?php echo $AVG; ?>" type="text" class="rate__input" />
                    BRL
                </div>
                <!-- /.rate__cell -->
            </div>
            <!-- /.rate -->
        </div>
        <!-- /.main__cell -->

        <p><strong>Referência:</strong> BitcoinToYou, FoxBit e MercadoBitcoin</p>
        <p><strong>Patrocine esse Projeto:</strong> 1Pg3up9SJYhYTH68CmhqLxTdADjbPhJv8Z</p>
    </div>
    <!-- /.main -->
</div>
<!-- /.wrapper -->

<?php include 'partials/footer.php'; ?>
