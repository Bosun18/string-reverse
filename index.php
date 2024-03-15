<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\StringReverse;

$test = new StringReverse();

echo $test->getReverse("can`t"); //nac`t