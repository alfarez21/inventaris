@extends('dashboard.main',["alink"=>"barang"])

@section('title','Daftar Barang')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Daftar Barang</h5>
                        <a href="{{ url('') }}/barang/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
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
                                <th>Nama Barang</th>
                                <th>Ruangan</th>
                                <th>Jumlah</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inventaris as $inven)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$inven->nama}}</td>
                                    <td>{{$inven->nama_ruang}}</td>
                                    <td>{{$inven->jumlah}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('') }}/barang/detail/{{$inven->id_inventaris}}" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="{{ url('') }}/barang/edit/{{$inven->id_inventaris}}" title="edi" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ url('') }}/barang/hapus/{{$inven->id_inventaris}}" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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