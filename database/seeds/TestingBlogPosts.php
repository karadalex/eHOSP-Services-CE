<?php

use Illuminate\Database\Seeder;

class TestingBlogPosts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(eHOSP\Models\BlogPost::class, 20)->create();
    }
}
