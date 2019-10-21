@extends('dashboard.main',["alink"=> "petugas"])


@section('title',"$aksi Petugas")

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">{{$aksi}} Petugas</h5>
                        <a href="{{ url('') }}/petugas" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('') }}/{{$aksi}}petugas" method="post">
                        @csrf
                        @if($aksi=="Edit")<input type="hidden" class="form-control" name="id" value="{{$petugas->id_petugas}}">@endif
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="username" id="username" value="@if($aksi=="Edit"){{$petugas->username}}@endif">
                                @error('username')<span class="small muted text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="Nama" value="@if($aksi=="Edit"){{$petugas->nama_petugas}}@endif">
                                @error('nama')<span class="small muted text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Level" class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-2">
                                <select class="form-control select2bs4" id="Level" name="level" style="width: 100%;">
                                    <option value="0">-- Level --</option>
                                    @foreach ($level as $lvl)
                                        
                                        @if ($aksi=="Edit")
                                            @if ($lvl->id_level==$petugas->id_level)
                                                <option value="{{$lvl->id_level}}" selected>{{$lvl->nama_level}}</option>
                                            @else
                                                <option value="{{$lvl->id_level}}">{{$lvl->nama_level}}</option>
                                            @endif
                                        @else
                                            <option value="{{$lvl->id_level}}">{{$lvl->nama_level}}</option>
                                        @endif
                                        
                                    @endforeach
                                </select>
                                @error('level')<span class="small muted text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                                <a href="{{ url('') }}/petugas" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
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