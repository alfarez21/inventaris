<?php $__env->startSection('title','Detail Barang'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Detail Barang</h5>
                        <a href="<?php echo e(url('')); ?>/barang" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table>
                        <tr>
                            <td width="200" class="py-2"><strong>Kode Barang</strong></td>
                            <td>009</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Nama</strong></td>
                            <td>nama</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Jenis</strong></td>
                            <td>nama</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Ruang</strong></td>
                            <td>nama</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Jumlah</strong></td>
                            <td>nama</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Kondisi</strong></td>
                            <td>nama</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Keterangan</strong></td>
                            <td>nama</td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Tanggal Register</strong></td>
                            <td>nama</td>
                        </tr>
                    </table>
                </div>
                <!-- ./card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=>"barang"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\invetaris\resources\views/KelolaBarang/detail.blade.php ENDPATH**/ ?>