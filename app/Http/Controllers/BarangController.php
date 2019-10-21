<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    // Daftar Inventaris
    public function index()
    {
        $data['inventaris'] = DB::table("inventaris")
                ->join("jenis","inventaris.id_jenis","=","jenis.id_jenis")
                ->join("ruang","inventaris.id_ruang","=","ruang.id_ruang")
                ->get();

        return view('KelolaBarang.daftar',$data);
    }

    // Tambah Inventaris
    public function tambah()
    {
        $data['inventaris'] = "";
        $data['ruang'] = DB::table("ruang")->get();
        $data['jenis'] = DB::table("jenis")->get();
        $data['aksi'] = "Tambah";
        return view('KelolaBarang.form',$data);
    }

    // Simapan Data Inventaris
    public function simpan(Request $request)
    {
        $request->validate([
            "kode"=>"required",
            "nama"=>"required",
            "jenis"=>"not_in:0",
            "ruang"=>"not_in:0",
            "jumlah"=>"required|numeric",
            "kondisi"=>"required",
            "keterangan"=>"required",
        ]);

        DB::table('inventaris')->insert([
            'kode_inventaris'=>$request->kode,
            'nama'=>$request->nama,
            'id_jenis'=>$request->jenis,
            'id_ruang'=>$request->ruang,
            'jumlah'=>$request->jumlah,
            'kondisi'=>$request->kondisi,
            'keterangan'=>$request->keterangan,
            'tanggal_register'=>date("Y-m-d"),
            'id_petugas'=>Session::get("id_user")
        ]);

        return redirect()->back()->with("status","Data Di simpan");
    }

    // Edit Inventaris
    public function edit($id)
    {
        $data['ruang'] = DB::table("ruang")->get();
        $data['jenis'] = DB::table("jenis")->get();
        $data['inventaris'] = DB::table("inventaris")->where("id_inventaris",$id)->first();
        $data['aksi'] = "Edit";
        return view('KelolaBarang.form',$data);
    }

    // Simpan Perubahan Data Petugas
    public function ubah(Request $request)
    {
        $request->validate([
            "kode"=>"required",
            "nama"=>"required",
            "jenis"=>"not_in:0",
            "ruang"=>"not_in:0",
            "jumlah"=>"required|numeric",
            "kondisi"=>"required",
            "keterangan"=>"required",
        ]);

        DB::table('inventaris')
        ->where('id_inventaris',$request->id)
        ->update([
            'kode_inventaris'=>$request->kode,
            'nama'=>$request->nama,
            'id_jenis'=>$request->jenis,
            'id_ruang'=>$request->ruang,
            'jumlah'=>$request->jumlah,
            'kondisi'=>$request->kondisi,
            'keterangan'=>$request->keterangan,
            'tanggal_register'=>date("Y-m-d"),
            'id_petugas'=>Session::get("id_user")
        ]);

        return redirect()->back()->with("status","Perubahan Disimpan");
    }

    // Detail Inventaris
    public function detail($id)
    {
        
        $data['inventaris'] = DB::table("inventaris")
            ->join("jenis","inventaris.id_jenis","=","jenis.id_jenis")
            ->join("ruang","inventaris.id_ruang","=","ruang.id_ruang")
            ->where('id_inventaris', $id)
            ->first();
        return view('KelolaBarang.detail',$data);
    }

    // Hapus Inventaris
    public function hapus($id){

        DB::table('inventaris')->where('id_inventaris', $id)->delete();
        return redirect()->back()->with("status","Data Berhasil Hapus");

    }
}
