<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index()
    {
        return view('KelolaJenisBarang.daftar');
    }

    public function tambah()
    {
        $data['aksi'] = "Tambah";
        return view('KelolaJenisBarang.form',$data);
    }

    public function edit()
    {
        $data['aksi'] = "Edit";
        return view('KelolaJenisBarang.form',$data);
    }

    public function detail()
    {
        return view('KelolaJenisBarang.detail');
    }
}
