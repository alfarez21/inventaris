<?php $__env->startSection('title','Detail Pegawai'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Detail Pegawai</h5>
                    <a href="<?php echo e(url('')); ?>/pegawai" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td class="py-2" width="200"><strong>NIP</strong></td>
                        <td>009</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Nama Pegawai</strong></td>
                        <td>Lab 01</td>
                    </tr>
                    <tr>
                        <td class="py-2" width="200"><strong>Alamat</strong></td>
                        <td>Ruangan Untuk Komputer</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "pegawai"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\invetaris\resources\views/KelolaPegawai/detail.blade.php ENDPATH**/ ?>