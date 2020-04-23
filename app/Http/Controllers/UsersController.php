<?php

namespace App\Http\Controllers;

use App\Usersmodel;
use Illuminate\Http\Request;



class UsersController extends Controller
{

    public function store(Request $request){
        $user = $this->find_unique_email($request);
        if($user){
        echo $this->email_exsited_alert();
        } else{
            $user = new Usersmodel();
            $user->name =  $request->Fname;
            $user->email = $request->Email;
            $user ->Password = $request->password;
            $user->save();
            echo $this->createLocalSession($request->Fname);
        }
    }

    public function login(Request $request){
        $user = $this->find_unique_email($request);
        if($user){
            if($user->password == $request->password){
                session(['UserID' =>$user->UserID]);
                session(['name' =>$user->name]);
                echo $this->createLocalSession($user->name);

            }else{
                echo  $this->login_failed();
            }
        }else{
           echo  $this->login_failed();
        }
    }








    private function find_unique_email(Request $request){
        $user = Usersmodel::where('email','=',$request->input('Email'))->first();
        return $user;
    }

    private function email_exsited_alert(){
        return '<script>
                    alert("email is existed,try again");
                    self.location = document.referrer;
                </script>>';
    }

    private function createLocalSession($name){
        return  '<script>
                    sessionStorage.setItem("name",'.$name.')
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
