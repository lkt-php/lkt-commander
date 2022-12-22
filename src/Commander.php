<?php

namespace Lkt\Commander;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;

final class Commander
{
    private static array $consoleCommands = [];

    public static function register(Command $command): void
    {
        Commander::$consoleCommands[] = $command;
    }

    /**
     * @throws \Exception
     */
    public static function run(): void
    {
        $application = Commander::getApplication();
        $application->run();
    }

    public static function getApplication(): Application
    {
        $application = new Application();

        foreach (Commander::$consoleCommands as $command) {
            $application->add($command);
        }

        return $application;
    }
}