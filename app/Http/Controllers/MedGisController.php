<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class MedGisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('services.med-gis.index', [
            'title' => 'eHOSP - Med GIS'
        ]);
    }

    public function maps()
    {
        return view('services.med-gis.maps', [
            'title' => 'eHOSP - Med GIS Maps'
        ]);
    }
}
