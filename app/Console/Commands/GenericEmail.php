<?php

namespace eHOSP\Console\Commands;

use Illuminate\Console\Command;
use eHOSP\Mail\GenericEmail as GenericEmailTemplate;

class GenericEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:generic {address}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a simple email with a generic eHOSP template';

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
        $msgTitle = $this->ask('What is the message Title?');
        $msgBody =  $this->ask('Please type here your message:');
        $msgGoodbye =  $this->ask('Close message with Goodbye, thanks etc.');

        $this->line('You are about to send welcome email to '.$address);
        if ($this->confirm('Do you wish to continue?')) {
            \Mail::to($address)->send(new GenericEmailTemplate(
                $msgTitle,
                $msgBody,
                $msgGoodbye
            ));
        }
    }
}
