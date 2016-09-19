<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;
use Auth;

class StaticPagesController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect()->route('login');
        }

        return view('welcome', [
            'title' => 'eHOSP - Hospital on the Cloud'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'eHOSP - About'
        ]);
    }

    public function doc()
    {
        return view('doc', [
            'title' => 'eHOSP - Doc'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'eHOSP - Contact'
        ]);
    }

    public function downloads()
    {
        return view('downloads', [
            'title' => 'eHOSP - Downloads'
        ]);
    }

    public function refs()
    {
        return view('refs', [
            'title' => 'eHOSP - References'
        ]);
    }

    public function research()
    {
        return view('research', [
            'title' => 'eHOSP - Research'
        ]);
    }

    public function support()
    {
        return view('support', [
            'title' => 'eHOSP - Support'
        ]);
    }
}
