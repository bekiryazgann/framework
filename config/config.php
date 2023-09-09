<?php

ob_start("ob_gzhandler");
define('PATH', dirname(__DIR__));
session_start();


const FRAMEWORK_CRYPTO_KEY = '123123';
const FRAMEWORK_CRYPTO_CIPHER = 'AES-128-ECB';
const FRAMEWORK_BASE_URL = 'http://localhost:3000';
const FRAMEWORK_CSRF = true;
const FRAMEWORK_DATABASE_HOST = true;
const FRAMEWORK_DATABASE_NAME = true;
const FRAMEWORK_DATABASE_USER = true;
const FRAMEWORK_DATABASE_PASS = true;