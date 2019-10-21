<?php $__env->startSection('title','Reset Password'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Reset Pasword</h5>
                        <a href="<?php echo e(url('')); ?>/petugas" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <table>
                        <tr>
                            <td width="200" class="py-2"><strong>Username</strong></td>
                            <td><?php echo e($petugas->username); ?></td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Nama</strong></td>
                            <td><?php echo e($petugas->nama_petugas); ?></td>
                        </tr>
                        <tr>
                            <td width="200" class="py-2"><strong>Password</strong></td>
                            <td><?php echo e($petugas->password); ?></td>
                        </tr>
                        <tr>
                            <td width="200"></td>
                            <td  class="py-3">
                                <a href="<?php echo e(url('')); ?>/resetpetugas/<?php echo e($petugas->id_petugas); ?>" title="reset" class="btn btn-warning"><i class="fas fa-redo"></i></a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "petugas"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaPetugas/reset.blade.php ENDPATH**/ ?>