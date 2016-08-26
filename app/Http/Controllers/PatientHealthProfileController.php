<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class PatientHealthProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('services.patient-med-profile.index', [
            'title' => 'eHOSP - Health Profile'
        ]);
    }
}
