<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;
use DB;

class EmergencyController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        $emergency_contacts = DB::table('emergency_contacts')->where('country', 'GRC')->get();
        return view('services.emergency.index', [
            'title' => 'eHOSP - Emergency',
            'emergency_contacts' => $emergency_contacts
        ]);
    }
}
