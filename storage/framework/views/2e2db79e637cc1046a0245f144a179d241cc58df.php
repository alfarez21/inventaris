<?php $__env->startSection('title',$aksi.' Peminjaman'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="float-left m-0"><?php echo e($aksi); ?> Peminjaman</h5>
                            <a href="<?php echo e(url('')); ?>/peminjaman" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                        </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(url('')); ?>/<?php echo e($aksi); ?>peminjaman" method="post">
                        <?php echo csrf_field(); ?>
                        <?php if($aksi=="Edit"): ?><input type="hidden" class="form-control" name="id" value="<?php echo e($petugas->id_petugas); ?>"><?php endif; ?>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-2 col-form-label">Nama Pegawai</label>
                            <div class="col-sm-4">
                                <select class="form-control select2bs4" id="Pegawai" name="pegawai" style="width: 100%;">
                                    <option value="0">-- Pegawai --</option>
                                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <?php if($aksi=="Edit"): ?>
                                            <?php if($peg->id_pegawai==$pinjam->id_pegawai): ?>
                                                <option value="<?php echo e($peg->id_pegawai); ?>" selected><?php echo e($peg->nama_pegawai); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($peg->id_pegawai); ?>"><?php echo e($peg->nama_pegawai); ?></option>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <option value="<?php echo e($peg->id_pegawai); ?>"><?php echo e($peg->nama_pegawai); ?></option>
                                        <?php endif; ?>
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                            <div class="col-sm-2">
                                <input type="date" class="form-control" id="keterangan" name="tgl_kem" value="sadsa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                                <a href="<?php echo e(url('')); ?>/petugas" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- ./card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',['alink'=>"peminjaman"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaPeminjaman/form.blade.php ENDPATH**/ ?>