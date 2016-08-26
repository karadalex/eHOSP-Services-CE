<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class PrescriptionsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        return view('services.', [
            'title' => 'eHOSP - Prescriptions'
        ]);
    }
}
