<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{

    // Daftar Petugas
    public function index()
    {
        $data['petugas'] = DB::table('petugas')
                        ->join('level', 'petugas.id_level', '=', 'level.id_level')
                        ->get();;

        return view('KelolaPetugas.daftar',$data);
    }

    // Tambah Petugas
    public function tambah()
    {
        $data['petugas'] = "";
        $data['level'] =  DB::table('level')->get();
        $data['aksi'] = "Tambah";
        return view('KelolaPetugas.form',$data);
    }

    // Simpan Data Petugas
    public function simpan(Request $request)
    {
        $request->validate([
            "username"=>"required|unique:petugas",
            "nama"=>"required",
            "level"=>"not_in:0"
        ]);

        DB::table('petugas')->insert([
            'username'=>$request->username,
            'nama_petugas'=>$request->nama,
            'password'=>"",
            'id_level'=>$request->level
        ]);

        return redirect()->back()->with("status","Data Di simpan");
    }

    // Edit Petugas
    public function edit($id)
    {
        $data['level'] = DB::table('level')->get();
        $data['aksi'] = "Edit";
        $data['petugas'] = DB::table('petugas')->where("id_petugas",$id)->first();
        return view('KelolaPetugas.form',$data);
    }

    // Simpan Perubahan Data Petugas
    public function ubah(Request $request)
    {
        $request->validate([
            "username"=>"required",
            "nama"=>"required",
            "level"=>"not_in:0"
        ]);

        DB::table('petugas')
        ->where('id_petugas',$request->id)
        ->update([
            'username'=>$request->username,
            'nama_petugas'=>$request->nama,
            'password'=>"",
            'id_level'=>$request->level
        ]);

        return redirect()->back()->with("status","Perubahan Disimpan");
    }

    // Detail Petugas
    public function detail($id)
    {
    
        $data['petugas'] = DB::table('petugas')
                    ->join('level', function ($join) use($id){
                        $join->on('petugas.id_level', '=', 'level.id_level')
                        ->where('id_petugas', $id);
                    })->first();

        return view('KelolaPetugas.detail',$data);
    }

    // Reset Password
    public function reset($id)
    {
        $data['petugas'] = DB::table('petugas')
                    ->join('level', function ($join) use($id){
                        $join->on('petugas.id_level', '=', 'level.id_level')
                        ->where('id_petugas', $id);
                    })->first();

                    
        return view('KelolaPetugas.reset',$data);
    }

    // Reset Password POST
    public function resetpet($id)
    {
        
        DB::table('petugas')
        ->where('id_petugas',$id)
        ->update([
            'password'=>rand(10000,99999),
        ]);

        return redirect()->back()->with("status","Password Direset");
    }

    // Hapus Petugas
    public function hapus($id)
    {

        $cek = DB::table('inventaris')->where('id_petugas', $id)->get();
        if(count($cek)==0)
        {
            DB::table('petugas')->where('id_petugas', $id)->delete();
            return redirect()->back()->with('status','Data Berhasil Dihapus');
        }
        else{
            return redirect()->back()->with('status','Data digunakan ditempat lain');
        }
    }
}
