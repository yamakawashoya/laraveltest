<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function confirm(ContactRequest $request)
    {
    $contact = new Contact($request->all());
    return view('contact.confirm', compact('contact'));
    }

    public function send(ContactRequest $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->body = $request->input('body');
        $contact->save();
        return redirect()->route('contact.thanks');
    }

    public function fix(Request $request)
    {
    $input = $request->input();
    $contact = new Contact($input);
    $contact->exists = true; // 新しいレコードを作成しない
    return view('contact.form', compact('contact'));
    }
}