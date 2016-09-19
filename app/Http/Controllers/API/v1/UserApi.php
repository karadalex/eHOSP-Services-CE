<?php

namespace eHOSP\Http\Controllers\API\v1;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;
use eHOSP\Http\Controllers\Controller;

use eHOSP\Models\User;

class UserApi extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        $user = $request->user();
        return $user;
    }
}
