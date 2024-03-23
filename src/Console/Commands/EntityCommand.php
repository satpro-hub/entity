<?php

namespace SatproHub\Entity\Console\Commands;

use Illuminate\Console\Command;
use SatproHub\Entity\Services\HandleService;

class EntityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:entity {object}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Создает объеты для реализации Service-Repository Pattern';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $object = $this->argument('object');
        HandleService::handle($object);
        $this->info('The command was successful!');
    }
}
