<?php

use Illuminate\Database\Seeder;

class EmergencyContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = realpath(base_path('database/dumps/emergency_contacts.sql'));
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $database = env('DB_DATABASE');
        exec("mysql --user=$username --password=$password $database < $path");
    }
}
