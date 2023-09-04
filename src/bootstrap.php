<?php

namespace Lkt\Commander;

use Lkt\Commander\Console\Commands\MakeCrontabCommand;
use Lkt\Commander\Console\Commands\RunCrontabCommand;
use Lkt\Commander\Console\Commands\ShowCrontabCommand;

if (php_sapi_name() == 'cli') {
    Commander::register(new MakeCrontabCommand());
    Commander::register(new RunCrontabCommand());
    Commander::register(new ShowCrontabCommand());
}