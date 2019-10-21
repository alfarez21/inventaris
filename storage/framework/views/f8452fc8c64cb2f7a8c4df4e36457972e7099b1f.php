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
                            <td><?php echo e($inventaris->kode_inventaris); ?></td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Nama</strong></td>
                            <td><?php echo e($inventaris->nama); ?></td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Jenis</strong></td>
                            <td><?php echo e($inventaris->nama_jenis); ?></td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Ruang</strong></td>
                            <td><?php echo e($inventaris->nama_ruang); ?></td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Jumlah</strong></td>
                            <td><?php echo e($inventaris->jumlah); ?></td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Kondisi</strong></td>
                            <td><?php echo e($inventaris->kondisi); ?></td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Keterangan</strong></td>
                            <td><?php echo e($inventaris->keterangan); ?></td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Tanggal Register</strong></td>
                            <td><?php echo e($inventaris->tanggal_register); ?></td>
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
<?php echo $__env->make('dashboard.main',["alink"=>"barang"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaBarang/detail.blade.php ENDPATH**/ ?>