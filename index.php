<?php include 'functions.php'; ?>

<?php include 'partials/header.php'; ?>

<!-- .main -->
<div class="main">
    <!-- .main__cell -->
    <div class="main__cell">
        <!-- .rate -->
        <div id="average" class="rate">
            <!-- .rate-field -->
            <div class="rate-field">
                <input value="1.00000000" id="btc-value" type="text" class="rate-field__input" />
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
                <input value="<?php echo str_replace(".", ",", $AVG); ?>" id="brl-value" data-val="<?php echo $AVG; ?>" type="text" class="rate-field__input" />
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
