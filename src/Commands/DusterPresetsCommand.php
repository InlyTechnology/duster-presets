<?php

namespace Inly\DusterPresets\Commands;

use Illuminate\Console\Command;

class DusterPresetsCommand extends Command
{
    public $signature = 'duster-presets';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
