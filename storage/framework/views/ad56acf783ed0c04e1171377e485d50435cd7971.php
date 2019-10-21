<?php $__env->startSection('title','Daftar Barang'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Daftar Barang</h5>
                        <a href="<?php echo e(url('')); ?>/barang/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <table id="tableFull" class="table table-hover table-bordered">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="10">No</th>
                                <th>Nama Barang</th>
                                <th>Ruangan</th>
                                <th>Jumlah</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $inventaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inven): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($inven->nama); ?></td>
                                    <td><?php echo e($inven->nama_ruang); ?></td>
                                    <td><?php echo e($inven->jumlah); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('')); ?>/barang/detail/<?php echo e($inven->id_inventaris); ?>" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="<?php echo e(url('')); ?>/barang/edit/<?php echo e($inven->id_inventaris); ?>" title="edi" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="<?php echo e(url('')); ?>/barang/hapus/<?php echo e($inven->id_inventaris); ?>" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
<?php echo $__env->make('dashboard.main',["alink"=>"barang"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaBarang/daftar.blade.php ENDPATH**/ ?>