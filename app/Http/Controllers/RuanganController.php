<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RuanganController extends Controller
{
    // Daftar Ruangan
    public function index()
    {
        $data['ruang'] = DB::table('ruang')->get();
        return view('KelolaRuangan.daftar', $data);
    }

    // Tambah Ruangan
    public function tambah()
    {
        $data['aksi'] = "Tambah";
        return view('KelolaRuangan.form',$data);
    }

    // Simpan Data Ruangan
    public function simpan(Request $request)
    {
        $request->validate([
            'kode'       => 'required',
            'nama'       => 'required',
            'keterangan' => 'required',
        ]);
        DB::table('ruang')->insert([
            'kode_ruang' => $request->kode,
            'nama_ruang' => $request->nama,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->back()->with('status','Data berhasil disimpan');
    }

    // Edit Ruangan
    public function edit($id)
    {
        $data['ruang'] = DB::table('ruang')->where('id_ruang',$id)->first();
        $data['aksi'] = "Edit";
        return view('KelolaRuangan.form',$data);
    }

    // Simpan Perubahan Data Ruangan
    public function ubah(Request $request)
    {
        $request->validate([
            'kode'       => 'required',
            'nama'       => 'required',
            'keterangan' => 'required',
        ]);
        DB::table('ruang')
            ->where('id_ruang', $request->id)
            ->update([
                'kode_ruang' => $request->kode,
                'nama_ruang' => $request->nama,
                'keterangan' => $request->keterangan
            ]);
        return redirect()->back()->with('status','Perubahan Disimpan');
    }

    // Detail Ruangan
    public function detail($id)
    {
        $data['ruang'] = DB::table('ruang')->where('id_ruang',$id)->first();
        return view('KelolaRuangan.detail', $data);
    }

    // Hapus Data
    public function hapus($id)
    {
        $cek = DB::table('inventaris')->where('id_ruang', $id)->get();
        if(count($cek)==0)
        {
            DB::table('ruang')->where('id_ruang', $id)->delete();
            return redirect()->back()->with('status','Data Berhasil Dihapus');
        }
        else{
            return redirect()->back()->with('status','Data digunakan ditempat lain');
        }
    }
}
