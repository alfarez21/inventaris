@extends('dashboard.main')
@extends('dashboard.main',["alink"=> "jenisbarang"])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">{{$aksi}} Jenis Barang</h5>
                        <a href="{{ url('') }}/jenisbarang" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-2 col-form-label">Kode Jenis</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="kode">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaJenis" class="col-sm-2 col-form-label">Nama Jenis</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="namaJenis">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" id="keterangan" value="sadsa"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                                <a href="{{ url('') }}/jenisbarang" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
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