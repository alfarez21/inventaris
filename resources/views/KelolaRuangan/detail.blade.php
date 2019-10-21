@extends('dashboard.main',["alink"=> "ruangan"])


@section('title','Detail Ruangan')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Detail Ruangan</h5>
                    <a href="{{ url('') }}/ruangan" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td class="py-2" width="200"><strong>Kode</strong></td>
                        <td>{{$ruang->kode_ruang}}</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Nama Ruangan</strong></td>
                        <td>{{$ruang->nama_ruang}}</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Keterangan</strong></td>
                        <td>{{$ruang->keterangan}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection