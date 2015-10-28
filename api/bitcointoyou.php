<?php

require 'functions.php';

$ticker = getCurl("https://www.bitcointoyou.com/api/ticker.aspx");
$ticker = json_decode($ticker, true);
$ticker = $ticker['ticker'];
$ticker = json_encode($ticker);

echo $ticker;
