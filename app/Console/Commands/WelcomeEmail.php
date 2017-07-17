<?php

namespace eHOSP\Console\Commands;

use Illuminate\Console\Command;
use eHOSP\Mail\Welcome;

class WelcomeEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:welcome {address}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send welcome email, for testing purposes only';

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
        $address = $this->argument('address');
        $this->line('You are about to send welcome email to '.$address);
        if ($this->confirm('Do you wish to continue?')) {
            \Mail::to($address)->send(new Welcome);
        }
    }
}
