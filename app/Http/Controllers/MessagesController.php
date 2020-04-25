<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\messages;

class MessagesController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('UserID')) {
            $UserID = $request->session()->get('UserID');
            $name = $request->session()->get('name');
            $role=$request->session()->get('role');
            $mess = messages::select('*')->get();
            return view('message', compact('mess','name','role'));
        }else{
            echo $this->not_login();
        }
    }


    public function remove(Request $request){
        if($request->session()->has('UserID')) {
            $UserID = $request->session()->get('UserID');
            $name = $request->session()->get('name');
            $role=$request->session()->get('role');
            $messages = messages::where('id',$_POST['id']);
        //delete
            $messages->delete();
            return redirect()->route('message.index');
        }else{
            echo $this->not_login();
        }

        
    }
}
