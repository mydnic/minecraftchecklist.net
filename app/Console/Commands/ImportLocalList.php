<?php

namespace App\Console\Commands;

use App\Models\Objective;
use Illuminate\Console\Command;

class ImportLocalList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'objectives:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $test = require __DIR__ . '/../../../import.php';

        collect($test)->each(function ($objective) {
            Objective::create([
                'title' => ['en' => $objective]
            ]);
        });
    }
}
