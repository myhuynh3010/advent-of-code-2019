<?php

namespace App\Console\Commands\Day01;

use Illuminate\Console\Command;

class Day01Part2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'day01:part2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $path = storage_path('app/inputs/day01.txt');
        $input = file($path);

        return Command::SUCCESS;
    }
}
