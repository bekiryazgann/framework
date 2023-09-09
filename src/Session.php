<?php

namespace src;

use Aura\Session\SessionFactory;

class Session
{
    /**
     * @var \src\Session
     */
    public static self $instance;

    /**
     * @var \Aura\Session\Segment
     */
    private \Aura\Session\Segment $segment;

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

    public function __construct()
    {
        $session_factory = new SessionFactory;
        $session = $session_factory->newInstance($_COOKIE);
        $this->segment = $session->getSegment('Framework\src\Session');
    }

    /**
     * @param $key
     * @param $value
     *
     * @return void
     */
    public function set($key, $value): void
    {
        $this->segment->set($key, crypto()->encrypt($value));
    }

    /**
     * @param $key
     *
     * @return string|false
     */
    public function get($key): string|false
    {
        if ($value = $this->segment->get($key)) {
            return crypto()->decrypt($value);
        }

        return false;
    }

    /**
     * @param $key
     * @param $val
     *
     * @return void
     */
    public function setFlash($key, $val): void
    {
        $this->segment->setFlash($key, crypto()->encrypt($val));
    }

    /**
     * @param $key
     *
     * @return string|false
     */
    public function getFlash($key): string|false
    {
        if ($value = $this->segment->getFlash($key)) {
            return crypto()->decrypt($value);
        }

        return false;
    }

    /**
     * @return void
     */
    public function clearFlash(): void
    {
        $this->segment->clearFlash();
        $this->segment->clearFlashNow();
    }

    /**
     * @return void
     */
    public function clear(): void
    {
        $this->segment->clear();
    }
}