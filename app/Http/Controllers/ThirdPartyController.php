<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class ThirdPartyController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function accounting()
    {
        return view('services.third-party.accounting.index', [
            'title' => 'eHOSP - 3D Bioprinting'
        ]);
    }
}
