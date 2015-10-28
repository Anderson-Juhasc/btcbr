<?php

require 'functions.php';

$ticker = getCurl("http://www.negociecoins.com.br/api/v3/btcbrl/ticker");

echo $ticker;
