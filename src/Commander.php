<?php

namespace Lkt\Commander;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;

final class Commander
{
    private static $consoleCommands = [];

    /**
     * @param Command $command
     * @return void
     */
    public static function register(Command $command)
    {
        Commander::$consoleCommands[] = $command;
    }

    /**
     * @return void
     * @throws \Exception
     */
    public static function run(): void
    {
        $application = Commander::getApplication();
        $application->run();
    }

    /**
     * @return Application
     * @throws \Exception
     */
    public static function getApplication(): Application
    {
        $application = new Application();

        foreach (Commander::$consoleCommands as $command) {
            $application->add($command);
        }

        return $application;
    }
}