<?php

namespace eHOSP\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use eHOSP\Http\Requests;
use eHOSP\Http\Controllers\Controller;

class Bot extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        // Retrieve text that user typed to bot
        $request_text = $request->input('text');
        // Call Hospbot throught eHOSP webhook
        $http = new \GuzzleHttp\Client;
        $post_url = env('HOSPBOT_WEBHOOK_URL');
        $response = $http->post($post_url, [
            'form_params' => [
                'message' => $request_text
            ],
        ]);
        return $response->getBody();
    }
}
