<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitContact($request)
    {
        $contact = new Contact($request->all());
        $contact->save();

        return redirect('/#contact')->with('message', "Thank you $request->name, your message has been sent");
    }
}
