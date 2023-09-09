<?php

use src\Carbon;
use src\Crypto;
use src\Form;
use src\Logger;
use src\Router\Router;
use src\Error;
use src\Session;
use Valitron\Validator;

/**
 * @return \src\Carbon
 */
function carbon(): Carbon
{
    return Carbon::getInstance();
}

/**
 * @return \src\Crypto
 */
function crypto(): Crypto
{
    return new Crypto(FRAMEWORK_CRYPTO_KEY, FRAMEWORK_CRYPTO_CIPHER ?? 'AES-128-ECB');
}

/**
 * @return \src\Router\Router
 */
function router(): Router
{
    return Router::getInstance();
}

/**
 * @return \Valitron\Validator
 */
function validator(): Validator
{
    return Validator::getInstance($_POST);
}

/**
 * @param $name
 *
 * @return bool|array
 */
function old($name): string|array|null
{
    $data = validator()->data();
    if (isset($data[$name])) {
        return $data[$name];
    }

    return null;
}

/**
 * @return \src\Error
 */
function error(): Error
{
    return Error::getInstance(validator());
}

/**
 * @return \src\Logger
 */
function logger(): Logger
{
    return Logger::getInstance();
}

/**
 * @param $path
 *
 * @return string
 */
function site($path): string
{
    $base = defined(FRAMEWORK_BASE_URL) . '/' ?? '/';

    return $base . $path;
}

/**
 * @param $path
 *
 * @return string
 */
function assets($path): string
{
    return site('public/assets/' . $path);
}

/**
 * @return \src\Session
 */
function session(): Session
{
    return Session::getInstance();
}