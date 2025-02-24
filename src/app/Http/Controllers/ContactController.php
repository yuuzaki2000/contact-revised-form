<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contacts');
    }

    public function confirm(ContactRequest $request){
        $contact =$request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request){
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        //データベースへ登録
        Contact::create($contact);
        return view('thanks');
    }
}
