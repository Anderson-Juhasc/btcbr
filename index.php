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
            <h2 class="main__title">
                <!--input id="" name="" type="checkbox" /-->
                Média
            </h2>

            <!-- .rate -->
            <div id="average" class="rate">
                <!-- .rate__cell -->
                <div class="rate__cell">
                    <input value="1.00000000" type="text" class="btc-value rate__input" onClick="this.setSelectionRange(0, this.value.length)" />
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
                <input value="<?php echo $AVG; ?>" data-val="<?php echo $AVG; ?>" type="text" class="brl-value rate__input" onClick="this.setSelectionRange(0, this.value.length)" />
                    BRL
                </div>
                <!-- /.rate__cell -->
            </div>
            <!-- /.rate -->
        </div>
        <!-- /.main__cell -->

        <!-- .main__cell -->
        <div class="main__cell">
            <h2 class="main__title">
                <!--input id="" name="" type="checkbox" /-->
                BitcoinToYou
            </h2>

            <!-- .rate -->
            <div id="bitcointoyou" class="rate">
                <!-- .rate__cell -->
                <div class="rate__cell">
                    <input value="1.00000000" type="text" class="btc-value rate__input" onClick="this.setSelectionRange(0, this.value.length)" />
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
                    <input value="<?php echo $BTY; ?>" data-val="<?php echo $BTY; ?>" type="text" class="brl-value rate__input" onClick="this.setSelectionRange(0, this.value.length)" />
                    BRL
                </div>
                <!-- /.rate__cell -->
            </div>
            <!-- /.rate -->
        </div>
        <!-- /.main__cell -->

        <!-- .main__cell -->
        <div class="main__cell">
            <h2 class="main__title">
                <!--input id="" name="" type="checkbox" /-->
                FoxBit
            </h2>

            <!-- .rate -->
            <div id="foxbit" class="rate">
                <!-- .rate__cell -->
                <div class="rate__cell">
                    <input value="1.00000000" type="text" class="btc-value rate__input" onClick="this.setSelectionRange(0, this.value.length)" />
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
                    <input value="<?php echo $FOX; ?>" data-val="<?php echo $FOX; ?>" type="text" class="brl-value rate__input" onClick="this.setSelectionRange(0, this.value.length)" />
                    BRL
                </div>
                <!-- /.rate__cell -->
            </div>
            <!-- /.rate -->
        </div>
        <!-- /.main__cell -->

        <!-- .main__cell -->
        <div class="main__cell">
            <h2 class="main__title">
                <!--input id="" name="" type="checkbox" /-->
                LocalBitcoins
            </h2>

            <!-- .rate -->
            <div id="localbitcoins" class="rate">
                <!-- .rate__cell -->
                <div class="rate__cell">
                    <input value="1.00000000" type="text" class="btc-value rate__input" onClick="this.setSelectionRange(0, this.value.length)" />
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
                    <input value="<?php echo $LB; ?>" data-val="<?php echo $LB; ?>" type="text" class="brl-value rate__input" onClick="this.setSelectionRange(0, this.value.length)" />
                    BRL
                </div>
                <!-- /.rate__cell -->
            </div>
            <!-- /.rate -->
        </div>
        <!-- /.main__cell -->
    </div>
    <!-- /.main -->

    <!--p>
    <label for="">
        <input id="" name="" type="checkbox" /> Remover checagens
    </label>
    </p-->

    <p><strong>Patrocine esse Projeto:</strong> 1Pg3up9SJYhYTH68CmhqLxTdADjbPhJv8Z</p>
</div>
<!-- /.wrapper -->

<?php include 'partials/footer.php'; ?>
