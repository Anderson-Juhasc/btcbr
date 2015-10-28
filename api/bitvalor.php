<?php

require 'functions.php';

$ticker = getCurl("http://api.bitvalor.com/v1/ticker.json");
$ticker = json_decode($ticker, true);
$ticker = $ticker['ticker_24h']['total'];
$ticker = json_encode($ticker);

echo $ticker;
