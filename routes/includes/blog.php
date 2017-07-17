<?php
/*
|--------------------------------------------------------------------------
| Blog Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the blog routes that are handled
| by your application.
|
*/

use Illuminate\Support\Facades\DB;

Route::group(['prefix' => '/blog'], function () {
    $posts = DB::table('blog_posts')->get();
    foreach ($posts as $post) {
        $routeTitle = kebab_case(title_case($post->title));
        Route::get($routeTitle, function () use($post) {
            try {
                return view('blog.'.$post->viewname);
            }
            catch(Exception $e) {
                abort('404');
            }
        });
    }
});