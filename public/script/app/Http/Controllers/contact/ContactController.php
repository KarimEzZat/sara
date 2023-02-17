<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->only(['destroy']);
    }

    //
    public function index()
    {
        $contacts = Contact::desc()->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function postContact(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        // Sending Mail
        Mail::to('yourgmail@gmail.com')->send(new ContactMail($input));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with(['success' => 'Data Deleted Successfully']);
    }
}
