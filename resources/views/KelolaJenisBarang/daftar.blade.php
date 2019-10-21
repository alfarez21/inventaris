@extends('dashboard.main',["alink"=> "jenisbarang"])

@section('title','Daftar Jenis Barang')
@section('active','jenisbarang')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Daftar Jenis Barang</h5>
                        <a href="{{ url('') }}/jenisbarang/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="tableFull" class="table table-bordered table-">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="10">No</th>
                                <th width="120">Kode Jenis</th>
                                <th>Nama Jenis</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jenis as $j)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$j->kode_jenis}}</td>
                                <td>{{$j->nama_jenis}}</td>
                                <td class="text-center">
                                    <a href="{{ url('') }}/jenisbarang/detail/{{$j->id_jenis}}" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ url('') }}/jenisbarang/edit/{{$j->id_jenis}}" title="edit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ url('') }}/jenisbarang/hapus/{{$j->id_jenis}}" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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