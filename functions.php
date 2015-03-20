<?php
$APIs = array();

$APIs[] = array(
    "api" => "mercadobitcoin",
    "url" => "https://www.mercadobitcoin.com.br/api/ticker/"
);

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
        case 'mercadobitcoin':
            $MB = json_decode(file_get_contents($url), true)["ticker"]["last"];
            $lastVal[] = $MB;
            break;
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

$AVG = number_format($AVG / count($lastVal), 2);
$MB = number_format($MB, 2);
$BTY = number_format($BTY, 2);
$FOX = number_format($FOX, 2);
?>
