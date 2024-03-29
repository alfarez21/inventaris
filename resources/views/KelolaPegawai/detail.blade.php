@extends('dashboard.main',["alink"=> "pegawai"])


@section('title','Detail Pegawai')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Detail Pegawai</h5>
                    <a href="{{ url('') }}/pegawai" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td class="py-2" width="200"><strong>NIP</strong></td>
                        <td>{{$pegawai->nip}}</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Nama Pegawai</strong></td>
                        <td>{{$pegawai->nama_pegawai}}</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Alamat</strong></td>
                        <td>{{$pegawai->alamat}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection