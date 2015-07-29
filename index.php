<?php include 'partials/header.php'; ?>

<!-- .main -->
<div class="main">
    <!-- .main__cell -->
    <div class="main__cell">
        <!-- .rate -->
        <div id="average" class="rate">
            <h1 class="rate__title">
                <?php if ($source == "MEDIA") : ?>
                    Média do Mercado
                <?php elseif ($source == "B2U") : ?>
                    BitcoinToYou
                <?php elseif ($source == "FOX") : ?>
                    FoxBit
                <?php endif; ?>
            </h1>

            <!-- .rate-field -->
            <div class="rate-field">
                <input value="1.00000000" id="btc-value" type="number" class="rate-field__input" />
                <div class="rate-field__addon">
                    BTC
                </div>
            </div>
            <!-- /.rate-field -->

            <!-- .rate-divider -->
            <div class="rate-divider">
                <i class="icon-loop"></i>
            </div>
            <!-- /.rate-divider -->

            <!-- .rate-field -->
            <div class="rate-field">
                <input value="<?php echo str_replace(",", "", $QUOTA); ?>" id="brl-value" data-val="<?php echo str_replace(",", "", $QUOTA); ?>" type="number" class="rate-field__input" />
                <div class="rate-field__addon">
                    BRL
                </div>
            </div>
            <!-- /.rate-field -->
        </div>
        <!-- /.rate -->
    </div>
    <!-- /.main__cell -->
</div>
<!-- /.main -->

    <!--p><strong>Patrocine esse Projeto:</strong> 1Pg3up9SJYhYTH68CmhqLxTdADjbPhJv8Z</p-->

<?php include 'partials/footer.php'; ?>
