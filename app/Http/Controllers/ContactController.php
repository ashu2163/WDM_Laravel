<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\messages;

class ContactController extends Controller
{
    public function getContact(Request $request) { 
        if($request->session()->has('UserID')) {
            $UserID = $request->session()->get('UserID');
            $name = $request->session()->get('name');
            $role=  $request->session()->get('role');
            return view('contacts', compact('role','name'));
        } 
      } 
 
      public function saveContact11(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        $message = new messages;
        $message->EmailID = $request->email;
        //echo '<script>alert('$request->email');</script>';
        $message->Message = $request->message;
        $message->status = "1";

        $message->save();
        return back()->with('success', 'Thank you for contact us!');
      }

    public function saveContact(Request $request) {

    }
}