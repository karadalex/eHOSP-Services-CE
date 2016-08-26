<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class RadioLabController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('services.radiology-lab.index', [
            'title' => 'eHOSP - Radiology Lab'
        ]);
    }
}
