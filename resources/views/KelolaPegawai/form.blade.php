@extends('dashboard.main',["alink"=> "pegawai"])


@section('title',"$aksi Pegawai")

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">{{$aksi}} Pegawai</h5>
                    <a href="{{ url('') }}/pegawai" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ url('') }}/{{$aksi}}pegawai" method="post">
                    @csrf
                    @if($aksi=="Edit")<input type="hidden" class="form-control" name="id" value="{{$pegawai->id_pegawai}}">@endif
                    <div class="form-group row">
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nip" id="nip" @if($aksi=="Edit") value="{{$pegawai->id_pegawai}}" @endif>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nama" id="Nama" @if($aksi=="Edit") value="{{$pegawai->nama_pegawai}}" @endif>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" id="Alamat" name="alamat">@if($aksi=="Edit"){{$pegawai->id_pegawai}}@endif</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-2">
                            <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                            <a href="{{ url('') }}/pegawai" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection