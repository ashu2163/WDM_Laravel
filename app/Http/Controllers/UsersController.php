<?php

namespace App\Http\Controllers;

use App\Usersmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{

    public function store(Request $request){
        $validator= Validator::make($request->all(),[
            'Fname' => 'required',
            'Email' => 'required|email|unique:user',
            'password'=> 'required|confirmed|min:8',

        ]);
        if($validator->fails()){

            return back()
                ->withErrors($validator, 'register')
                ->withInput();
        }

        $user = $this->find_unique_email($request);
        if($user){
        echo $this->email_exsited_alert();
        }else{
            $user = new Usersmodel();
            $user->name =  $request->Fname;
            $user->email = $request->Email;
            $user ->Password = $request->password;
            $user->save();
            $sub="Registration Message";
            $message="Thank you for registering!! To add/modify project, events and video, please login!!";
            mail($user->email,$sub,$message);
            $this->login($request);
        }
    }

    public function login(Request $request){
        $validator= Validator::make($request->all(),[
                'Email' => 'required|email',
                'password'=> 'required',
            ]);
        if ($validator->fails()) {
                return back()
                ->withErrors($validator, 'login')
                ->withInput();
        }
        $user = $this->find_unique_email($request);
        if($user){
            if($user->password == $request->password){
                session(['role'=> $user->Role]);
                session(['UserID' =>$user->UserID]);
                session(['name' =>$user->name]);
                echo $this->createLocalSession($user->name);

            }else{
                echo  $this->login_failed();
                //return view('app');
            }
        }else{
           echo  $this->login_failed();
        }
    }

    public function bootstrap(){
        return view("testInherit");
    }








    private function find_unique_email(Request $request){
        $user = Usersmodel::where('email','=',$request->input('Email'))->first();
        return $user;
    }

    private function jump_back(){
        return '<script>
                    self.location = document.referrer;
                </script>>';
    }

    private function email_exsited_alert(){
        return '<script>
                    alert("email is existed,try again");
                    self.location = document.referrer;
                </script>>';
    }

    private function createLocalSession($name){
        return  '<script>
                    sessionStorage.setItem("name","'.$name.'")
                    console.log(sessionStorage)
                    window.location.href= "adminproject";
                </script>';
    }

    private function login_failed(){
        return '<script>
                    alert("User is not exsited or password is wrong");
                    self.location = document.referrer;
                </script>>';
    }


}
