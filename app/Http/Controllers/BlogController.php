<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use eHOSP\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        $blog_posts = DB::table('blog_posts')->paginate(4);
        return view('blog', [
            'title' => 'eHOSP - Blog',
            'posts' => $blog_posts
        ]);
    }
}
