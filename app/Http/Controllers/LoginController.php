<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function index(){
        if(Session::get("logined"))
        {
            
            return view("beranda");

        }
        else{

            return view("login");

        }
        
    }

    public function login(Request $Request)
    {

        $this->validate($Request,[
            ['username'=>'required'],
            ['password'=>'required'],
        ]);

        $user = $Request->input('username');
        $pass = $Request->input('password');

        if($user=="admin" && $pass=="1")
        {
            Session::put("logined","asas");
            dd(Session::get("logined"));
            return redirect('/');
        }
        else
        {

            return redirect('/');

        }
    }

}
