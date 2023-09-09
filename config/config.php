<?php

ob_start("ob_gzhandler");
define('PATH', dirname(__DIR__));

const FRAMEWORK_CRYPTO_KEY = '123123';
const FRAMEWORK_CRYPTO_CIPHER = 'AES-128-ECB';
const FRAMEWORK_BASE_URL = 'http://localhost:300';