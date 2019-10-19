@extends('dashboard.main',["alink"=> "petugas"])


@section('title','Detail Petugas')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Detail Petugas</h5>
                        <a href="{{ url('') }}/petugas" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table>
                        <tr>
                            <td width="200" class="py-2"><strong>Username</strong></td>
                            <td>ASD</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Nama</strong></td>
                            <td>sadsads</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Level</strong></td>
                            <td>dsfds</td>
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