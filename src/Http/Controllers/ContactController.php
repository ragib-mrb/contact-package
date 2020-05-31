<?php

namespace Furious\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Furious\Contact\Http\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function index(){
        return view("furious::contact");
    }

    public function save(Request $request){
        $data = [];
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['query'] = $request->message;

//        dd($data);


        Mail::send('furious::email', $data, function ($message){
            $message->to(config('contact.send_email_to'), 'Ragib MRB')->subject("this is the testing message");
        });


        Contact::create($request->all());

        return redirect()->route('contact.form');
    }



}
