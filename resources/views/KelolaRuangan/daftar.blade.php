@extends('dashboard.main',["alink"=> "ruangan"])


@section('title','Daftar Ruangan')

@section('content')
<div class="row">
    <div class="col-12"> 
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Daftar Ruangan</h5>
                    <a href="{{ url('') }}/ruangan/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
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
                            <th>Kode Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Keterangan</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ruang as $r)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$r->kode_ruang}}</td>
                            <td>{{$r->nama_ruang}}</td>
                            <td>{{$r->keterangan}}</td>
                            <td class="text-center">
                                <a href="{{ url('') }}/ruangan/detail/{{$r->id_ruang}}" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="{{ url('') }}/ruangan/edit/{{$r->id_ruang}}" title="edit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ url('') }}/ruangan/hapus/{{$r->id_ruang}}" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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