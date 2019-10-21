@extends('dashboard.main',["alink"=> "peminjaman"])


@section('title','Detail Peminjaman')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Detail Peminjaman</h5>
                    <a href="{{ url('') }}/peminjaman" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td class="py-2" width="200"><strong>Nama Pegawai</strong></td>
                        <td>{{$pinjam->nama_pegawai}}</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Tanggal Pinjam</strong></td>
                        <td>{{$pinjam->tanggal_pinjam}}</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Tanggal Kembali</strong></td>
                        <td>{{$pinjam->tanggal_kembali}}</td>
                    </tr>
                </table>
                <br>
                <table id="tableFull"  class="table table-bordered">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="10">No</th>
                            <th>Nama Barang</th>
                            <th width="100">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail_pinjam as $dp)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dp->nama}}</td>
                                <td class="text-center">{{$dp->jumlah}}</td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection