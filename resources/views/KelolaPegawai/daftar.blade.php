@extends('dashboard.main',["alink"=> "pegawai"])


@section('title','Daftar Pegawai')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Daftar Pegawai</h5>
                    <a href="{{ url('') }}/pegawai/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                <table id="tableFull" class="table table-hover table-bordered">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="10">No</th>
                            <th>NIP</th>
                            <th>Nama Pegawai</th>
                            <th>Alamat</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $peg)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$peg->nip}}</td>
                                <td>{{$peg->nama_pegawai}}</td>
                                <td>{{$peg->alamat}}</td>
                                <td class="text-center">
                                    <a href="{{ url('') }}/pegawai/detail/{{$peg->id_pegawai}}" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ url('') }}/pegawai/edit/{{$peg->id_pegawai}}" title="edi" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ url('') }}/pegawai/hapus/{{$peg->id_pegawai}}" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div> 
@endsection