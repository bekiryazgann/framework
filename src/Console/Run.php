<?php

namespace src\Console;

use app\Commands\Cache;
use app\Commands\DefaultCommand;
use app\Commands\MakeController;
use app\Commands\MakeMiddleware;
use app\Commands\Server;

class Run
{
    public Application $application;

    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $default = new DefaultCommand();

        $this->application = new Application();
        $this->application->add($default);
        $this->application->add(new Server());
        $this->application->add(new Cache());
        $this->application->add(new MakeController());
        $this->application->add(new MakeMiddleware());

        $this->application->setDefaultCommand($default->getName());
        $this->application->run();
    }
}