<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'testUser',
            'password' => bcrypt('password'),
            'first_name' => 'first',
            'last_name' => 'last',
            'email' => 'test@example.com',
            'gender' => 'MALE',
            'user_type' => 'DOCTOR',
            'age' => 19,
            'birth_country' => 'GRC',
            'ssn' => '123456789'
        ]);
    }
}
