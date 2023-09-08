<?php

namespace src;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger as Monolog;

class Logger
{
    /**
     * @var \src\Logger
     */
    public static self $instance;

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function console($data): void
    {
        $logger = new Monolog('console');
        $logger->pushHandler(new StreamHandler(PATH . '/storage/log/console.log', Level::Info));
        $logger->info($data);
        print_r($data);
    }

    public function error($data): void
    {
        $logger = new Monolog('error');
        $logger->pushHandler(new StreamHandler(PATH . '/storage/log/error.log', Level::Error));
        $logger->error($data);
    }
}