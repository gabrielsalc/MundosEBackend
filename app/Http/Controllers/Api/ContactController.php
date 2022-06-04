<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Contact;
 

class ContactController extends Controller
{
  // Store Contact Form data
  public function ContactForm(Request $request) {
 
    // Form validation
     $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'number'=>'required',
        'message' => 'required'
     ]);
     if ($validator->fails()) { 
 return response()->json(['error'=>$validator->errors()], 401);            
}
    //  Store data in database
    Contact::create($request->all());

    //  Send mail to Application Admin
    \Mail::send('emails.contactemail', array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'number' => $request->get('number'),
        'bodyMessage' => $request->get('message'),
    ), function($message) use ($request){
        $message->from($request->email);
        $message->to('gabrielsalcedo.gs@gmail.com', 'Admin')->subject($request->get('email'));
    });
    return response()->json(['success' => 'The email has been sent.']);
}
}
