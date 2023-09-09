<?php

$startTime = microtime(true);
use src\Container;

require __DIR__ . '/config/config.php';
require PATH . '/vendor/autoload.php';

$container = new Container();

$endTime = microtime(true);