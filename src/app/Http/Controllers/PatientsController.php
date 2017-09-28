<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class PatientsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware(['auth', 'role:DOCTOR,SURGEON']);
    }

    public function index()
    {
        return view('services.patients.index', [
            'title' => 'eHOSP - Patients'
        ]);
    }
}
