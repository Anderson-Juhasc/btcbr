<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="conversor, cotacao, bitcoin, valor, preco, custa, btcbr, btc, brl, btcbrl">

	<title>BTCBR - Bitcoin Conversor</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />

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
                <a href="index.php" class="head__logo">
                    <i class="icon-loop"></i> BTCBR
                </a>
                <!-- /.head__logo -->

                <!-- .head-btn -->
                <a href="#" id="head-btn" class="head-btn">
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
                <?php
                    $source = "MEDIA";

                    if ($_GET["fonte"]) {
                        $source = $_GET["fonte"];
                    }

                    if ($source == "MEDIA") {
                        $APIs = array();

                        $APIs[] = array(
                            "api" => "localbitcoins",
                            "url" => "https://localbitcoins.com/bitcoinaverage/ticker-all-currencies/"
                        );

                        $APIs[] = array(
                            "api" => "bitcointoyou",
                            "url" => "https://www.bitcointoyou.com/api/ticker.aspx"
                        );

                        $APIs[] = array(
                            "api" => "foxbit",
                            "url" => "https://api.blinktrade.com/api/v1/BRL/ticker"
                        );

                        $lastVal = array();

                        foreach ($APIs as $key) {
                            $api = $key["api"];
                            $url = $key["url"];

                            switch ($api) {
                                case 'bitcointoyou':
                                    $BTY = json_decode(file_get_contents($url), true)["ticker"]["last"];
                                    $lastVal[] = $BTY;
                                    break;
                                case 'foxbit':
                                    $FOX = json_decode(file_get_contents($url), true)["last"];
                                    $lastVal[] = $FOX;
                                    break;
                            }
                        }

                        foreach ($lastVal as $val){
                           $AVG = $AVG + $val;
                        }

                        $QUOTA = number_format($AVG / count($lastVal), 2);
                    }

                    if ($source == "B2U") {
                        $B2U = json_decode(file_get_contents("https://www.bitcointoyou.com/api/ticker.aspx"), true)["ticker"]["last"];

                        $QUOTA = number_format($B2U, 2);
                    }

                    if ($source == "FOX") {
                        $FOX = json_decode(file_get_contents("https://api.blinktrade.com/api/v1/BRL/ticker"), true)["last"];

                        $QUOTA = number_format($FOX, 2);
                    }
                ?>

                <!-- .head-box -->
                <div class="head-box">
                    <label class="head-box__title">
                        <input id="" name="source" type="radio" value="MEDIA" <?php if ($source == "MEDIA") { echo "checked"; } ?> /> Média
                    </label>
                </div>
                <!-- /.head-box -->

                <!-- .head-box -->
                <div class="head-box">
                    <label class="head-box__title">
                        <input id="" name="source" type="radio" value="B2U" <?php if ($source == "B2U") { echo "checked"; } ?> /> BitcoinToYou
                    </label>
                </div>
                <!-- /.head-box -->

                <!-- .head-box -->
                <div class="head-box">
                    <label class="head-box__title">
                        <input id="" name="source" type="radio" value="FOX" <?php if ($source == "FOX") { echo "checked"; } ?> /> FoxBit
                    </label>
                </div>
                <!-- /.head-box -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.head-collapse -->
    </header>
    <!-- /.head -->
