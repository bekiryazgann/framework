<?php

namespace src;

class Carbon extends \Carbon\Carbon
{
    public static self $instance;

    /**
     * @return \src\Carbon
     */
    public static function getInstance(): Carbon
    {
        if (!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
}