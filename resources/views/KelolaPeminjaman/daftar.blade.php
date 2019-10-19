@extends('template/layout')

@section('title','Peminjaman')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header clearfix">
                    <h5 class="float-left m-0">Daftar Peminjaman</h5>
                    <a href="#" class="btn btn-flat btn-sm btn-primary float-right">Tambah</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="tableFull" class="table table-bordered table-">
                    <thead class="thead-light">
                        <tr>
                            <th width="50">No</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status Peminjaman</th>
                            <th width="260">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>asdad</td>
                            <td>sad</td>
                            <td>sadsad</td>
                            <td>
                                <a href="#" class="btn btn-flat btn-sm btn-primary">detail</a>
                                <a href="#" class="btn btn-flat btn-sm btn-success">edit</a>
                                <a href="#" class="btn btn-flat btn-sm btn-danger">hapus</a>
                            </td>
                        </tr>
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