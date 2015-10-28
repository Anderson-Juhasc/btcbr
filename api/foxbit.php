<?php

require 'functions.php';

$ticker = getCurl("https://api.blinktrade.com/api/v1/BRL/ticker");

echo $ticker;
