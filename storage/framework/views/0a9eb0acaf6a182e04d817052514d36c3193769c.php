<?php $__env->startSection('title','Detail Peminjaman'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Detail Peminjaman</h5>
                    <a href="<?php echo e(url('')); ?>/peminjaman" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td class="py-2" width="200"><strong>Nama Pegawai</strong></td>
                        <td><?php echo e($pinjam->nama_pegawai); ?></td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Tanggal Pinjam</strong></td>
                        <td><?php echo e($pinjam->tanggal_pinjam); ?></td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Tanggal Kembali</strong></td>
                        <td><?php echo e($pinjam->tanggal_kembali); ?></td>
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
                        <?php $__currentLoopData = $detail_pinjam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($dp->nama); ?></td>
                                <td class="text-center"><?php echo e($dp->jumlah); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "peminjaman"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaPeminjaman/detail.blade.php ENDPATH**/ ?>