<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => 'eHOSP - Blog'
        ]);
    }
}
