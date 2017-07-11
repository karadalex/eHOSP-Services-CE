<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;
use eHOSP\Mail\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact', [
            'title' => 'eHOSP - Contact'
        ]);
    }

    public function contact_send_email()
    {
        \Mail::to('ehosp.cloud@gmail.com')->send(new Contact);
        return redirect()->action('StaticPagesController@index');
    }
}
