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
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <table>
                    <tr>
                        <td class="py-2" width="178"><strong>Nama Pegawai</strong></td>
                        <td>{{$pinjam->nama_pegawai}}</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="178"><strong>Tanggal Pinjam</strong></td>
                        <td>{{$pinjam->tanggal_pinjam}}</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="178"><strong>Tanggal Kembali</strong></td>
                        <td>{{$pinjam->tanggal_kembali}}</td>
                    </tr>
                </table>
                <form action="{{ url('') }}/tamdetailpinjam" method="post" class="mt-2">
                    @csrf
                    <input type="hidden" class="form-control" name="id" value="{{$pinjam->id_peminjaman}}">
                    <div class="form-group row">
                        <label for="kode" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-4">
                            <select class="form-control select2bs4" id="inventaris" name="inventaris" style="width: 100%;">
                                <option value="0">-- Inventaris --</option>
                                @foreach ($inventaris as $inv)
                                    <option value="{{$inv->id_inventaris}}">{{$inv->nama}}</option>                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="jumlah" name="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-2">
                            <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                            <a href="{{ url('') }}/petugas" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </form>
                <br>
                <table id="tableFull"  class="table table-bordered">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="10">No</th>
                            <th>Nama Barang</th>
                            <th width="100">Jumlah</th>
                            <th width="30">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail_pinjam as $dp)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dp->nama}}</td>
                                <td class="text-center">{{$dp->jumlah}}</td>
                                <td class="text-center">
                                    <a href="{{ url('') }}/peminjaman/hapusdetail/{{$dp->id_detail_pinjam}}" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection