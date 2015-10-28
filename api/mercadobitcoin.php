<?php

require 'functions.php';

$ticker = getCurl("https://www.mercadobitcoin.com.br/api/ticker/");
$ticker = json_decode($ticker, true);
$ticker = $ticker['ticker'];
$ticker = json_encode($ticker);

echo $ticker;
