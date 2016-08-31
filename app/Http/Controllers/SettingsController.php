<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;
use Auth;
use App;

class SettingsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        return view('settings', [
            'title' => 'eHOSP - Settings'
        ]);
    }

    public function changes()
    {
        $user = Auth::user();
        $errors = false;

        $req_user_type = request()->input('user_type');
        if ($req_user_type != $user->user_type) {
            $user->user_type = $req_user_type;
            $user->save();
        }
        $req_language = request()->input('language');
        if ($req_language != $user->language) {
            $user->language = $req_language;
            $user->save();
            App::setLocale($req_language);
        }

        if ($errors) {
            $message = trans('messages.settings.failure');
        } else {
            $message = trans('messages.settings.success');
        }

        return view('settings', [
            'title' => 'eHOSP - Changes',
            'message' => $message
        ]);
    }
}
