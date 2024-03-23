<?php
namespace SatproHub\Entity\Console\Commands;
use Illuminate\Console\Command;

class EntityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:entity';

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
    }
}