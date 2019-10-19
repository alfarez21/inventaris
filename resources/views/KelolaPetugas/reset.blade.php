@extends('dashboard.main',["alink"=> "petugas"])

@section('title','Reset Password')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Reset Pasword</h5>
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
                            <td width="200" class="py-2"><strong>Password</strong></td>
                            <td>dsfds</td>
                        </tr>
                        <tr>
                            <td width="200"></td>
                            <td  class="py-3">
                                <a href="" title="reset" class="btn btn-warning"><i class="fas fa-redo"></i></a>
                            </td>
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