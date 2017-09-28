<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class CommunicationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        return view('services.communication.index', [
            'title' => 'eHOSP - Communication'
        ]);
    }

    public function messages()
    {
        return view('services.communication.messages', [
            'title' => 'eHOSP - Messages'
        ]);
    }

    public function video_chat()
    {
        return view('services.communication.video-chat', [
            'title' => 'eHOSP - Video Chat'
        ]);
    }
}
