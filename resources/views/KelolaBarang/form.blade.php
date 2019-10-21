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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('') }}/{{$aksi}}barang" method="post">
                        @csrf
                        @if($aksi=="Edit")
                            <input type="hidden" class="form-control" name="id" id="kode" value="{{$inventaris->id_inventaris}}">
                        @endif
                        <div class="form-group row">
                            <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="kode" id="kode" @if($aksi=="Edit") value="{{$inventaris->kode_inventaris}}" @endif>
                                @error('kode')<span class="small muted text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama" id="nama" @if($aksi=="Edit") value="{{$inventaris->nama}}" @endif>
                                @error('nama')<span class="small muted text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-3">
                                <select class="form-control select2bs4" id="jenis" name="jenis" style="width: 100%;">
                                    <option value="0">-- Jenis ---</option>
                                    @foreach ($jenis as $jen)
                                        @if ($aksi=="Edit")
                                            @if ($jen->id_jenis==$inventaris->id_jenis)
                                                <option value="{{$jen->id_jenis}}" selected>{{$jen->nama_jenis}}</option>
                                            @else
                                                <option value="{{$jen->id_jenis}}">{{$jen->nama_jenis}}</option>
                                            @endif
                                        @else
                                           <option value="{{$jen->id_jenis}}">{{$jen->nama_jenis}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('jenis')<span class="small muted text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ruang" class="col-sm-2 col-form-label">Ruang</label>
                            <div class="col-sm-3">
                                <select class="form-control select2bs4" id="ruang" name="ruang" style="width: 100%;">
                                    <option value="0">-- Ruangan ---</option>
                                    @foreach ($ruang as $ru)
                                        @if ($aksi=="Edit")
                                            @if ($ru->id_ruang==$inventaris->id_ruang)
                                                <option value="{{$ru->id_ruang}}" selected>{{$ru->nama_ruang}}</option>
                                            @else
                                                <option value="{{$ru->id_ruang}}">{{$ru->nama_ruang}}</option>
                                            @endif
                                        @else
                                           <option value="{{$ru->id_ruang}}">{{$ru->nama_ruang}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('ruang')<span class="small muted text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="jumlah" name="jumlah" @if($aksi=="Edit") value="{{$inventaris->jumlah}}" @endif>
                                @error('jumlah')<span class="small muted text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="kondisi" name="kondisi" @if($aksi=="Edit") value="{{$inventaris->kondisi}}" @endif>
                                @error('kondisi')<span class="small muted text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" id="keterangan" name="keterangan">@if($aksi=="Edit"){{$inventaris->keterangan}}@endif </textarea>
                                @error('keterangan')<span class="small muted text-danger">{{ $message }}</span>@enderror
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