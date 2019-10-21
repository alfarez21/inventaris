<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisBarangController extends Controller
{

    // Daftar Jenis Barang
    public function index()
    {
        $data['jenis'] = DB::table('jenis')->get();
        return view('KelolaJenisBarang.daftar',$data);
    }

    // Tambah Jenis Barang
    public function tambah()
    {
        $data['aksi'] = "Tambah";
        return view('KelolaJenisBarang.form',$data);
    }

    // Simpan Data Jenis Barang
    public function simpan(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required'
        ]);

        DB::table('jenis')->insert([
            'kode_jenis' => $request->kode,
            'nama_jenis' => $request->nama
        ]);
        return redirect()->back()->with('status','data berhasil disimpan');
    }

    // Edit Jenis Barang
    public function edit($id)
    {

        $data['jenis'] = DB::table('jenis')->where('id_jenis',$id)->first();
        $data['aksi'] = "Edit";
        return view('KelolaJenisBarang.form',$data);

    }
    
    // Simpan Peraubahan Data Barang
    public function ubah(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required'
        ]);

        DB::table('jenis')
            ->where('id_jenis', $request->id)
            ->update([
                'kode_jenis' => $request->kode,
                'nama_jenis' => $request->nama
            ]);
        
        return redirect()->back()->with('status','Perubahan disimpan');
    }

    // Detail Jenis Barang
    public function detail($id)
    {
        $data['jenis'] = DB::table('jenis')->where('id_jenis',$id)->first();
        return view('KelolaJenisBarang.detail',$data);
    }

    // Hapus Data
    public function hapus($id)
    {

        $cek = DB::table('inventaris')->where('id_jenis', $id)->get();
        if(count($cek)==0)
        {
            DB::table('jenis')->where('id_jenis', $id)->delete();
            return redirect()->back()->with('status','Data Berhasil Dihapus');
        }
        else{
            return redirect()->back()->with('status','Data digunakan ditempat lain');
        }
    }
}
