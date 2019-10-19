@extends('dashboard.main',["alink"=>"barang"])


@section('title',"$aksi Barang")

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">{{$aksi}} Barang</h5>
                        <a href="{{ url('') }}/barang" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="kode">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-3">
                                <select class="form-control select2bs4" id="jenis" style="width: 100%;">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option disabled="disabled">California (disabled)</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ruang" class="col-sm-2 col-form-label">Ruang</label>
                            <div class="col-sm-3">
                                <select class="form-control select2bs4" id="ruang" style="width: 100%;">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option disabled="disabled">California (disabled)</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="jumlah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="kondisi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" id="keterangan"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                                <a href="{{ url('') }}/barang" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
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