<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Show the view for the Contact page
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request):View {
        return view('contact', []);
    }

    /**
     * Process contact form submission, return success or failure
     *
     * @param Request $request
     *
     * @return bool
     */
    public function form(Request $request):bool {
        $contact = new Contact();

        $contact->name = $request->input('name');
        $contact->company_name = $request->input('company_name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        //TODO - sendemail

        return $contact->save();
    }
}
