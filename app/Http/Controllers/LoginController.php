<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

    public function login(Request $request)
    {

            
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        
        $user = $request->input('username');
        $pass = $request->input('password');

        $petugas = DB::table('petugas')
                ->where('username',$user)
                ->where('password',$pass)
                ->first();

        if($petugas==null){

            return redirect("/")->with("status","User Tidak Terdaftar");

        }
        else if($user == $petugas->username && $petugas->password)
        {
            Session::put("logined",true);
            Session::put("level",$petugas->id_level);
            Session::put("id_user",$petugas->id_petugas);
            Session::put("nama",$petugas->nama_petugas);
            return redirect('/');
        }
        else
        {

            return redirect("/")->with("status","Gagal Login");

        }
    }

    public function logout()
    {
        Session::flush();
        return redirect("/");
    }

    public function ubahpass()
    {
        $id = Session::get('user');
        return view('ubah');
    }

}
