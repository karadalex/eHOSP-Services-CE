<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;
use Auth;
use eHOSP\Models\EmergencyContacts;

class EmergencyController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        require config('global.methods').'/qrcodes.php';

        $country = Auth::user()->birth_country;
        $emergency_contactsObj = EmergencyContacts::where('country', $country)->get();
        $emergency_contacts = array();
        foreach ($emergency_contactsObj as $contact) {
            array_push($emergency_contacts, array(
                'contact_name' => $contact->contact_name,
                'phone_numbers' => $contact->phone_numbers,
                'qr' => qrphone($contact->phone_numbers)
            ));
        }
        return view('services.emergency.index', [
            'title' => 'eHOSP - Emergency',
            'emergency_contacts' => $emergency_contacts
        ]);
    }
}
