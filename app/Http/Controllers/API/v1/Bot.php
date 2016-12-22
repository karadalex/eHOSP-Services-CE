<?php

namespace eHOSP\Http\Controllers\API\v1;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;
use eHOSP\Http\Controllers\Controller;

class Bot extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        // Retrieve text that user typed to bot
        $request_text = $request->input('text');
        // Run Bot with retrieved text
        $command = escapeshellcmd('python ' . '"'.config('global.bot').'/main.py'.'" ' . $request_text);
        $output = shell_exec($command);
        return $output;
    }
}
