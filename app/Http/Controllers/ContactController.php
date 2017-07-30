<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

use App\Mail\Noreply;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;



class ContactController extends Controller
{
    public function create(){

    	return view('contact.create');
    }

    public function store(ContactRequest $request){
    	Mail::to(config('app.admin_email'))->send(new Noreply($request->name, $request->email, $request->message));
    	session()->flash('messageenvoye','Message envoye avec succes');
    	return redirect('contact');

    }
}
