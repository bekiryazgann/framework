<?php

namespace src\Cache;

class Cache
{
    public static self $instance;

    public static function getInstance(): self
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct()
    {

    }

    public function clearCache(): void
    {

    }
}