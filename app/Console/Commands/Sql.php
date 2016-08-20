<?php

namespace eHOSP\Console\Commands;

use Illuminate\Console\Command;

class Sql extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sql';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run SQL command or SQL file';

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
        $this->info('This is a test');
    }
}
