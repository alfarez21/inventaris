<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    // Daftar Pegawai
    public function index()
    {
        $data["pegawai"] = DB::table("pegawai")->get();
        return view('KelolaPegawai.daftar',$data);
    }

    // Tambah Pegawai
    public function tambah()
    {
        $data['aksi'] = "Tambah";
        return view('KelolaPegawai.form',$data);
    }

    // Simapan Data Pegawai
    public function simpan(Request $request)
    {
        $request->validate([
            "nip"=>"required|numeric",
            "nama"=>"required",
            "alamat"=>"required",
        ]);

        DB::table("pegawai")->insert([
            'nama_pegawai'=>$request->nama,
            'nip'=>$request->nip,
            'alamat'=>$request->alamat
        ]);

        return redirect()->back()->with("status","Data Di simpan");
    }


    // Edit Detail
    public function detail($id)
    {
        $data["pegawai"] = DB::table("pegawai")->where("id_pegawai",$id)->first();
        return view('KelolaPegawai.detail',$data);
    }

    // Hapus Pegawai
    public function hapus($id){

        DB::table('pegawai')->where('id_pegawai', $id)->delete();
        return redirect()->back()->with("status","Data Berhasil Hapus");

    }
}
