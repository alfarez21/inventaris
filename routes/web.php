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

// Beranda
Route::get('/', "LoginController@index");
Route::post("/login","LoginController@login");

// Kelola Ruangan
Route::get("/ruangan","RuanganController@index");
Route::get("/ruangan/tambah","RuanganController@tambah");
Route::get("/ruangan/edit","RuanganController@edit");
Route::get("/ruangan/detail","RuanganController@detail");

// Kelola Pegawai
Route::get("/pegawai","PegawaiController@index");
Route::get("/pegawai/tambah","PegawaiController@tambah");
Route::get("/pegawai/edit","PegawaiController@edit");
Route::get("/pegawai/detail","PegawaiController@detail");

// Kelola Barang
Route::get("/barang","BarangController@index");
Route::get("/barang/tambah","BarangController@tambah");
Route::get("/barang/edit","BarangController@edit");
Route::get("/barang/detail","BarangController@detail");

// Kelola Petugas
Route::get("/petugas","PetugasController@index");
Route::get("/petugas/tambah","PetugasController@tambah");
Route::get("/petugas/edit","PetugasController@edit");
Route::get("/petugas/detail","PetugasController@detail");
Route::get("/petugas/reset","PetugasController@reset");

// Kelola Jenis Barang
Route::get("/jenisbarang","JenisBarangController@index");
Route::get("/jenisbarang/tambah","JenisBarangController@tambah");
Route::get("/jenisbarang/edit","JenisBarangController@edit");
Route::get("/jenisbarang/detail","JenisBarangController@detail");