<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main
Route::get('/', "LoginController@index");
Route::post("/login","LoginController@login")->name("login");
Route::get("/logout","LoginController@logout")->name("logout");

// Kelola Ruangan
Route::get("/ruangan","RuanganController@index");
Route::get("/ruangan/tambah","RuanganController@tambah");
Route::get("/ruangan/edit/{id}","RuanganController@edit");
Route::get("/ruangan/detail/{id}","RuanganController@detail");
Route::get("/ruangan/hapus/{id}","RuanganController@hapus");
Route::post("/Tambahruangan","RuanganController@simpan");
Route::post("/Editruangan","RuanganController@ubah");

// Kelola Pegawai
Route::get("/pegawai","PegawaiController@index");
Route::get("/pegawai/tambah","PegawaiController@tambah");
Route::get("/pegawai/edit/{id}","PegawaiController@edit");
Route::get("/pegawai/detail/{id}","PegawaiController@detail");
Route::get("/pegawai/hapus/{id}","PegawaiController@hapus");
Route::post("/Tambahpegawai","PegawaiController@simpan");
Route::post("/Editpegawai","PegawaiController@ubah");

// Kelola Barang
Route::get("/barang","BarangController@index");
Route::get("/barang/tambah","BarangController@tambah");
Route::get("/barang/edit/{id}","BarangController@edit");
Route::get("/barang/detail/{id}","BarangController@detail");
Route::get("/barang/hapus/{id}","BarangController@hapus");
Route::post("/Tambahbarang","BarangController@simpan");
Route::post("/Editbarang","BarangController@ubah");

// Kelola Petugas
Route::get("/petugas","PetugasController@index");
Route::get("/petugas/tambah","PetugasController@tambah");
Route::get("/petugas/edit/{id}","PetugasController@edit");
Route::get("/petugas/detail/{id}","PetugasController@detail");
Route::get("/petugas/reset/{id}","PetugasController@reset");
Route::get("/petugas/hapus/{id}","PetugasController@hapus");
Route::get("/resetpetugas/{id}","PetugasController@resetpet");
Route::post("/Tambahpetugas","PetugasController@simpan");
Route::post("/Editpetugas","PetugasController@ubah");

// Kelola peminjaman
Route::get("/peminjaman","PeminjamanController@index");
Route::get("/peminjaman/tambah","PeminjamanController@tambah");
Route::get("/peminjaman/detail/{id}","PeminjamanController@detail");
Route::get("/peminjaman/detailpinjam/{id}","PeminjamanController@detailpinjam");
Route::get("/peminjaman/hapus/{id}","PeminjamanController@hapus");
Route::get("/peminjaman/hapusdetail/{id}","PeminjamanController@hapdetailpinjam");
Route::post("/Tambahpeminjaman","PeminjamanController@tam");
Route::post("/Editpeminjaman","PeminjamanController@ubah");
Route::post("/tamdetailpinjam","PeminjamanController@tamdetailpinjam");

// Kelola pengembalian
Route::get("/pengembalian","PengembalianController@index");
Route::get("/pengembalian/tambah","PengembalianController@tambah");
Route::get("/pengembalian/detail/{id}","PengembalianController@detail");
Route::get("/pengembalian/detailpinjam/{id}","PengembalianController@detailpinjam");
Route::get("/pengembalian/hapus/{id}","PengembalianController@hapus");
Route::get("/pengembalian/hapusdetail/{id}","PengembalianController@hapdetailpinjam");

// Kelola Jenis Barang
Route::get("/jenisbarang","JenisBarangController@index");
Route::get("/jenisbarang/tambah","JenisBarangController@tambah");
Route::get("/jenisbarang/edit/{id}","JenisBarangController@edit");
Route::get("/jenisbarang/detail/{id}","JenisBarangController@detail");
Route::get("/jenisbarang/hapus/{id}","JenisBarangController@hapus");
Route::post("/Tambahjenisbarang","JenisBarangController@simpan");
Route::post("/Editjenisbarang","JenisBarangController@ubah");