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
                <table id="tableFull" class="table table-bordered table-">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="10">No</th>
                            <th>Kode Jenis</th>
                            <th>Nama Jenis</th>
                            <th>Keterangan</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>asdad</td>
                            <td>elektronik</td>
                            <td>sadsad</td>
                            <td class="text-center">
                                <a href="{{ url('') }}/jenisbarang/detail" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="{{ url('') }}/jenisbarang/edit" title="edit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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