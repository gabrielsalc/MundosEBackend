<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Contact;
 

class ContactController extends Controller
{
   // Create Contact Form
   public function createForm(Request $request) {
    return view('contact');
  }
  // Store Contact Form data
  public function ContactUsForm(Request $request) {
      // Form validation
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'message' => 'required'
       ]);
      //  Store data in database
      Contact::create($request->all());
      // 
      return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
  }
}
