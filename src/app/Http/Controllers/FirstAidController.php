<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class FirstAidController extends Controller
{
    public function index()
    {
        return view('services.first-aid.index', [
            'title' => 'eHOSP - First Aid'
        ]);
    }
}
