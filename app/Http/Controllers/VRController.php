<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

class VRController extends Controller
{
    public function ehospSurgicalModel()
    {
        return view('vr.ehosp-surgical', [
            'title' => 'eHOSP Surgical - 3D Model'
        ]);
    }
}
