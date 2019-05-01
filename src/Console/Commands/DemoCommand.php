<?php

namespace janole\Demo\Console\Commands;

use Illuminate\Console\Command;

class DemoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Say "Hello, world!"';

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
     * @return mixed
     */
    public function handle()
    {
        echo "Hello, world!\n";

        return 0;
    }
}
