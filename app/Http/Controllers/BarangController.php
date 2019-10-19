<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('KelolaBarang.daftar');
    }

    public function tambah()
    {
        $data['aksi'] = "Tambah";
        return view('KelolaBarang.form',$data);
    }

    public function edit()
    {
        $data['aksi'] = "Edit";
        return view('KelolaBarang.form',$data);
    }

    public function detail()
    {
        return view('KelolaBarang.detail');
    }
}
