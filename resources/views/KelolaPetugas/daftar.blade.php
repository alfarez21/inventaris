@extends('dashboard.main',["alink"=> "petugas"])

@section('title','Daftar Petugas')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Daftar Petugas</h5>
                        <a href="{{ url('') }}/petugas/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="tableFull" class="table table-bordered table-hover">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="10">No</th>
                                <th>Nama Pengguna</th>
                                <th>Level</th>
                                <th width="210">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($petugas as $pet)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pet->nama_petugas }}</td>
                                <td>{{ $pet->nama_level}}</td>
                                <td class="text-center">
                                    <a href="{{ url('') }}/petugas/detail/{{ $pet->id_petugas }}" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ url('') }}/petugas/edit/{{ $pet->id_petugas }}" title="edit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ url('') }}/petugas/reset/{{ $pet->id_petugas }}" title="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></a>
                                    <a href="{{ url('') }}/petugas/hapus/{{ $pet->id_petugas }}" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- ./card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection