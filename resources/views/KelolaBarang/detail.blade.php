@extends('dashboard.main',["alink"=>"barang"])


@section('title','Detail Barang')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Detail Barang</h5>
                        <a href="{{ url('') }}/barang" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table>
                        <tr>
                            <td width="200" class="py-2"><strong>Kode Barang</strong></td>
                            <td>{{$inventaris->kode_inventaris}}</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Nama</strong></td>
                            <td>{{$inventaris->nama}}</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Jenis</strong></td>
                            <td>{{$inventaris->nama_jenis}}</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Ruang</strong></td>
                            <td>{{$inventaris->nama_ruang}}</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Jumlah</strong></td>
                            <td>{{$inventaris->jumlah}}</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Kondisi</strong></td>
                            <td>{{$inventaris->kondisi}}</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Keterangan</strong></td>
                            <td>{{$inventaris->keterangan}}</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Tanggal Register</strong></td>
                            <td>{{$inventaris->tanggal_register}}</td>
                        </tr>
                    </table>
                </div>
                <!-- ./card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection