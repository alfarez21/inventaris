<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        return view('KelolaPetugas.daftar');
    }

    public function tambah()
    {
        $data['aksi'] = "Tambah";
        return view('KelolaPetugas.form',$data);
    }

    public function edit()
    {
        $data['aksi'] = "Edit";
        return view('KelolaPetugas.form',$data);
    }

    public function detail()
    {
        return view('KelolaPetugas.detail');
    }

    public function reset()
    {
        return view('KelolaPetugas.reset');
    }
}
