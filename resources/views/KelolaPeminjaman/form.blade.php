@extends('template/layout')

@section('title','Form Peminjaman')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header clearfix">
                    <h5 class="float-left m-0">tambah/edit Jenis Barang</h5>
                    <a href="#" class="btn btn-flat btn-sm btn-primary float-right">Kembali</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kode" value="sad">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaJenis" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="namaJenis" value="dsfs">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="keterangan" value="sadsa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Status Pinjam</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="keterangan" value="sadsa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-success" value="Tambah">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- ./card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection