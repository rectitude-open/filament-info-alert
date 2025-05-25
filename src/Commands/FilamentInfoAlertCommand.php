<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoAlert\Commands;

use Illuminate\Console\Command;

class FilamentInfoAlertCommand extends Command
{
    public $signature = 'filament-info-alert';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
