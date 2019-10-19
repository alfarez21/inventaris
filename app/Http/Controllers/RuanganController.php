<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        return view('KelolaRuangan.daftar');
    }

    public function tambah()
    {
        $data['aksi'] = "Tambah";
        return view('KelolaRuangan.form',$data);
    }

    public function edit()
    {
        $data['aksi'] = "Edit";
        return view('KelolaRuangan.form',$data);
    }

    public function detail()
    {
        return view('KelolaRuangan.detail');
    }
}
