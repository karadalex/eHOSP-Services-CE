<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class SurgeryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware(['auth', 'role:SURGEON']);
    }

    public function index()
    {
        return view('services.surgery.index', [
            'title' => 'eHOSP - Surgery'
        ]);
    }

    public function surgery_design()
    {
        return view('services.surgery.SurgeryDesign', [
            'title' => 'eHOSP - Surgery Procedure Design'
        ]);
    }

    public function custom_surgery()
    {
        return view('services.surgery.custom-surgery', [
            'title' => 'eHOSP - Design custom Surgical Task'
        ]);
    }

    public function surgery_sample_tasks()
    {
        return view('services.surgery.surgery-sample-tasks', [
            'title' => 'eHOSP - Surgery Sample Tasks (FOR TESTING PURPOSES ONLY!)'
        ]);
    }

    public function robotic_arm_test()
    {
        return view('services.surgery.samples.robotic_arm_test', [
            'title' => 'eHOSP - Robotic Arm Test (FOR TESTING PURPOSES ONLY!)'
        ]);
    }

    public function simple_incision_1()
    {
        return view('services.surgery.samples.simple_incision_01', [
            'title' => 'eHOSP - Simple Incision 1 (FOR TESTING PURPOSES ONLY!)'
        ]);
    }

    public function stiches_test_1() {
        return view('services.surgery.samples.stiches_test_1', [
            'title' => 'Stiches Test 1'
        ]);
    }
}
