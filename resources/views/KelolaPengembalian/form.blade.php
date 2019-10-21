@extends('dashboard.main',['alink'=>"peminjaman"])

@section('title',$aksi.' Peminjaman')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="float-left m-0">{{$aksi}} Peminjaman</h5>
                            <a href="{{ url('') }}/peminjaman" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                        </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('') }}/{{$aksi}}peminjaman" method="post">
                        @csrf
                        @if($aksi=="Edit")<input type="hidden" class="form-control" name="id" value="{{$petugas->id_petugas}}">@endif
                        <div class="form-group row">
                            <label for="kode" class="col-sm-2 col-form-label">Nama Pegawai</label>
                            <div class="col-sm-4">
                                <select class="form-control select2bs4" id="Pegawai" name="pegawai" style="width: 100%;">
                                    <option value="0">-- Pegawai --</option>
                                    @foreach ($pegawai as $peg)
                                        
                                        @if ($aksi=="Edit")
                                            @if ($peg->id_pegawai==$pinjam->id_pegawai)
                                                <option value="{{$peg->id_pegawai}}" selected>{{$peg->nama_pegawai}}</option>
                                            @else
                                                <option value="{{$peg->id_pegawai}}">{{$peg->nama_pegawai}}</option>
                                            @endif
                                        @else
                                            <option value="{{$peg->id_pegawai}}">{{$peg->nama_pegawai}}</option>
                                        @endif
                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                            <div class="col-sm-2">
                                <input type="date" class="form-control" id="keterangan" name="tgl_kem" value="sadsa">
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