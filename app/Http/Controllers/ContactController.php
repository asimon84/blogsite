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
        $contact = Contact::create([
            'name' => $request->input('name'),
            'company_name' => $request->input('company_name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ]);

        return Contact::sendemail($contact->id);
    }
}
