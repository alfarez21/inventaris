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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{ url('') }}/{{ $aksi }}jenisbarang" class="form-horizontal">
                        @csrf
                        @if($aksi == "Edit")<input autocomplete="off" type="hidden" name="id" value="{{$jenis->id_jenis}}">@endif
                        <div class="form-group row">
                            <label for="kode" class="col-sm-2 col-form-label">Kode Jenis</label>
                            <div class="col-sm-2">
                                <input autocomplete="off" type="text" name="kode" class="form-control" id="kode" @if($aksi == "Edit") value="{{$jenis->kode_jenis}}" @endif>
                                @error('kode') {{$message}} @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaJenis" class="col-sm-2 col-form-label">Nama Jenis</label>
                            <div class="col-sm-4">
                                <input autocomplete="off" type="text" name="nama" class="form-control" id="namaJenis" @if($aksi == "Edit") value="{{$jenis->nama_jenis}}" @endif>
                                @error('nama') {{$message}} @enderror
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