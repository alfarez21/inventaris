<?php $__env->startSection('title','Daftar Ruangan'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12"> 
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Daftar Ruangan</h5>
                    <a href="<?php echo e(url('')); ?>/ruangan/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                </div>
            </div>
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
                            <th>Kode Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Keterangan</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ruang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($r->kode_ruang); ?></td>
                            <td><?php echo e($r->nama_ruang); ?></td>
                            <td><?php echo e($r->keterangan); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(url('')); ?>/ruangan/detail/<?php echo e($r->id_ruang); ?>" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo e(url('')); ?>/ruangan/edit/<?php echo e($r->id_ruang); ?>" title="edit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="<?php echo e(url('')); ?>/ruangan/hapus/<?php echo e($r->id_ruang); ?>" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "ruangan"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaRuangan/daftar.blade.php ENDPATH**/ ?>