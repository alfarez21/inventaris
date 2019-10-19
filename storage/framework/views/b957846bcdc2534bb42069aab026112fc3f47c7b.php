<?php $__env->startSection('title','Detail Petugas'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Detail Petugas</h5>
                        <a href="<?php echo e(url('')); ?>/petugas" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "petugas"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\invetaris\resources\views/KelolaPetugas/detail.blade.php ENDPATH**/ ?>