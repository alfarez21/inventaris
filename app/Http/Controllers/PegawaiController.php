<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('KelolaPegawai.daftar');
    }

    public function tambah()
    {
        $data['aksi'] = "Tambah";
        return view('KelolaPegawai.form',$data);
    }

    public function edit()
    {
        $data['aksi'] = "Edit";
        return view('KelolaPegawai.form',$data);
    }

    public function detail()
    {
        return view('KelolaPegawai.detail');
    }
}
