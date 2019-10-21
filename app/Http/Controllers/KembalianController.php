<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PeminjamanController extends Controller
{
    // Daftar Peminjaman
    public function index()
    {
        $data['pinjam'] = DB::table('peminjaman')
                    ->join("pegawai","peminjaman.id_pegawai","=","pegawai.id_pegawai")
                    ->where("status_peminjaman","Dipinjam")
                    ->get();
        return view('KelolaPeminjaman.daftar',$data);
    }

    // Tambah Peminjaman
    public function tambah()
    {
        $data['pegawai'] = DB::table('pegawai')->get();
        $data['aksi'] = "Tambah";
        return view('KelolaPeminjaman.form',$data);
    }


    // Edit Peminjaman
    public function edit()
    {
        $data['aksi'] = "Edit";
        return view('KelolaPeminjaman.form',$data);
    }

    // Detail Peminjaman
    public function detail($id)
    {
        $data['pinjam'] = DB::table('peminjaman')
                    ->join("pegawai","peminjaman.id_pegawai","=","pegawai.id_pegawai")
                    ->where("id_peminjaman",$id)
                    ->first();
        $data['detail_pinjam'] = DB::table('detail_pinjam')
                    ->join("inventaris","detail_pinjam.id_inventaris","=","inventaris.id_inventaris")
                    ->where("id_peminjaman",$id)
                    ->get();
        return view('KelolaPeminjaman.detail',$data);
    }

    // Edit Detail Pinjam
    public function detailpinjam($id)
    {
        $data['pinjam'] = DB::table('peminjaman')
                    ->join("pegawai","peminjaman.id_pegawai","=","pegawai.id_pegawai")
                    ->where("id_peminjaman",$id)
                    ->first();
        $data['inventaris'] = DB::table('inventaris')->get();
        $data['detail_pinjam'] = DB::table('detail_pinjam')
                    ->join("inventaris","detail_pinjam.id_inventaris","=","inventaris.id_inventaris")
                    ->where("id_peminjaman",$id)
                    ->get();

        return view('KelolaPeminjaman.detailPinjam',$data);
    }

    // Simpan Data Peminjaman
    public function tam(Request $request)
    {

        $request->validate([
            "pegawai"=>"not_in:0",
            "tgl_kem"=>"required",
        ]);

        DB::table("peminjaman")->insert([
            'id_pegawai'=>$request->pegawai,
            'tanggal_kembali'=>date("Y-m-d",strtotime($request->tgl_kem)),
            'tanggal_pinjam'=>date("Y-m-d"),
            'status_peminjaman'=>"Dipinjam"
        ]);
        
        $d = DB::table("peminjaman")
            ->where('tanggal_kembali',date("Y-m-d",strtotime($request->tgl_kem)))
            ->where('tanggal_pinjam',date("Y-m-d"))
            ->first();
        return redirect("/peminjaman/detailpinjam/".$d->id_peminjaman);

    }

    // Simpan Data Detail Pinjam
    public function tamdetailpinjam(Request $request)
    {

        $request->validate([
            "inventaris"=>"not_in:0",
            "jumlah"=>"required|numeric",
        ]);

        DB::table("detail_pinjam")->insert([
            'id_inventaris'=>$request->inventaris,
            'id_peminjaman'=>$request->id,
            'jumlah'=>$request->jumlah
        ]);

        return redirect()->back()->with("status","Barang Ditambah");

    }

    // Hapus detail pinjam
    public function hapdetailpinjam($id){

        DB::table('detail_pinjam')->where('id_detail_pinjam', $id)->delete();
        return redirect()->back()->with("status","Data Berhasil Hapus");

    }

    // Hapus Data
    public function hapus($id)
    {

        $cek = DB::table('detail_pinjam')->where('id_peminjaman', $id)->get();
        if(count($cek)!=0)
        {
            DB::table('detail_pinjam')->where('id_peminjaman', $id)->delete();
        }
        
        DB::table('peminjaman')->where('id_peminjaman', $id)->delete();
        return redirect()->back()->with('status','Data terhapus');
    }
}
