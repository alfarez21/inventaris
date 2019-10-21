<?php $__env->startSection('title',"$aksi Pegawai"); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0"><?php echo e($aksi); ?> Pegawai</h5>
                    <a href="<?php echo e(url('')); ?>/pegawai" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <form action="<?php echo e(url('')); ?>/<?php echo e($aksi); ?>pegawai" method="post">
                    <?php echo csrf_field(); ?>
                    <?php if($aksi=="Edit"): ?><input type="hidden" class="form-control" name="id" value="<?php echo e($pegawai->id_pegawai); ?>"><?php endif; ?>
                    <div class="form-group row">
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nip" id="nip" <?php if($aksi=="Edit"): ?> value="<?php echo e($pegawai->id_pegawai); ?>" <?php endif; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="nama" id="Nama" <?php if($aksi=="Edit"): ?> value="<?php echo e($pegawai->nama_pegawai); ?>" <?php endif; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" id="Alamat" name="alamat"><?php if($aksi=="Edit"): ?><?php echo e($pegawai->id_pegawai); ?><?php endif; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-2">
                            <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                            <a href="<?php echo e(url('')); ?>/pegawai" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "pegawai"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaPegawai/form.blade.php ENDPATH**/ ?>