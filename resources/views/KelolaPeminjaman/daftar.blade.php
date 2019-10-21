@extends('dashboard.main',['alink'=>"peminjaman"])

@section('title','Daftar Peminjaman')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Daftar Peminjaman</h5>
                        <a href="{{ url('') }}/peminjaman/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="tableFull"  class="table table-bordered table-">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="10">No</th>
                            <th>Nama Pegawai</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status Peminjaman</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pinjam as $pjm)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$pjm->nama_pegawai}}</td>
                            <td>{{$pjm->tanggal_pinjam}}</td>
                            <td>{{$pjm->tanggal_kembali}}</td>
                            <td>{{$pjm->status_peminjaman}}</td>
                            <td class="text-center">
                                <a href="{{ url('') }}/peminjaman/detail/{{$pjm->id_peminjaman}}" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="{{ url('') }}/peminjaman/detailpinjam/{{$pjm->id_peminjaman}}" title="edi" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ url('') }}/peminjaman/hapus/{{$pjm->id_peminjaman}}" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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