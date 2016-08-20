<?php

namespace eHOSP\Http\Controllers;

use eHOSP\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTypeServices = include config('global.data') . '/userTypeServices.php';
        $userTypes = include config('global.data') . '/userTypes.php';
        
        return view('home', [
            'title' => 'eHOSP - Home',
            'userTypeServices' => $userTypeServices,
            'userTypes' => $userTypes
        ]);
    }
}
