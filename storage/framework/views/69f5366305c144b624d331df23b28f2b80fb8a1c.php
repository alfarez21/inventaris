<?php $__env->startSection('title','Daftar Pengembalian'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Daftar Pengembalian</h5>
                    </div>
                </div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <table id="tableFull"  class="table table-bordered table-">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="10">No</th>
                            <th>Nama Pegawai</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status Pengembalian</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pinjam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pjm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($pjm->nama_pegawai); ?></td>
                            <td><?php echo e($pjm->tanggal_pinjam); ?></td>
                            <td><?php echo e($pjm->tanggal_kembali); ?></td>
                            <td><?php echo e($pjm->status_peminjaman); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(url('')); ?>/pengembalian/detail/<?php echo e($pjm->id_peminjaman); ?>" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo e(url('')); ?>/pengembalian/detailpinjam/<?php echo e($pjm->id_peminjaman); ?>" title="edi" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="<?php echo e(url('')); ?>/pengembalian/hapus/<?php echo e($pjm->id_peminjaman); ?>" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
<?php echo $__env->make('dashboard.main',['alink'=>"pengembalian"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaPengembalian/daftar.blade.php ENDPATH**/ ?>