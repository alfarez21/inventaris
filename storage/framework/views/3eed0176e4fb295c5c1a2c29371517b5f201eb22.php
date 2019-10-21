<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0"><?php echo e($aksi); ?> Jenis Barang</h5>
                        <a href="<?php echo e(url('')); ?>/ubahpassword" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?php echo e(url('')); ?>/<?php echo e($aksi); ?>ubahpassword" class="form-horizontal">
                        <?php echo csrf_field(); ?>
                        <?php if($aksi == "Edit"): ?><input type="hidden" name="id" value="<?php echo e($jenis->id_jenis); ?>"><?php endif; ?>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-2 col-form-label">Kode Jenis</label>
                            <div class="col-sm-2">
                                <input type="text" name="kode" class="form-control" id="kode" <?php if($aksi == "Edit"): ?> value="<?php echo e($jenis->kode_jenis); ?>" <?php endif; ?>>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaJenis" class="col-sm-2 col-form-label">Nama Jenis</label>
                            <div class="col-sm-4">
                                <input type="text" name="nama" class="form-control" id="namaJenis" <?php if($aksi == "Edit"): ?> value="<?php echo e($jenis->nama_jenis); ?>" <?php endif; ?>>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                                <a href="<?php echo e(url('')); ?>/ubahpassword" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
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
<?php echo $__env->make('dashboard.main',["alink"=> "ubahpassword"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/ubah.blade.php ENDPATH**/ ?>