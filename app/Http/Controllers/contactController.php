<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function welcome()
    {
        $contact = new Contact();
        $msg = $contact->messageWelcome();
        $details = ['10%', '20%', '30%'];
        return view(view: 'contact', data: ['message' => $msg, 'details' => $details]);
    }
}
