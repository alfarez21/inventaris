<?php $__env->startSection('title','Daftar Petugas'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Daftar Petugas</h5>
                        <a href="<?php echo e(url('')); ?>/petugas/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <table id="tableFull" class="table table-bordered table-hover">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="10">No</th>
                                <th>Nama Pengguna</th>
                                <th>Level</th>
                                <th width="210">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $petugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($pet->nama_petugas); ?></td>
                                <td><?php echo e($pet->nama_level); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('')); ?>/petugas/detail/<?php echo e($pet->id_petugas); ?>" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="<?php echo e(url('')); ?>/petugas/edit/<?php echo e($pet->id_petugas); ?>" title="edit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="<?php echo e(url('')); ?>/petugas/reset/<?php echo e($pet->id_petugas); ?>" title="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></a>
                                    <a href="<?php echo e(url('')); ?>/petugas/hapus/<?php echo e($pet->id_petugas); ?>" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- ./card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "petugas"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaPetugas/daftar.blade.php ENDPATH**/ ?>