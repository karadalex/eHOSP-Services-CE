<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class PostopController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        return view('services.postop-treatments.index', [
            'title' => 'eHOSP - Post-Op Treatments'
        ]);
    }
}
