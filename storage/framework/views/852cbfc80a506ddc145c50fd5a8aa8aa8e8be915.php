<?php $__env->startSection('title',"$aksi Ruangan"); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0"><?php echo e($aksi); ?> Ruangan</h5>
                    <a href="<?php echo e(url('')); ?>/ruangan" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="Kode" class="col-sm-2 col-form-label">Kode Ruangan</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="Kode">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama Ruangan</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Ket" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="Ket">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-2">
                            <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                            <a href="<?php echo e(url('')); ?>/ruangan" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "ruangan"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\invetaris\resources\views/KelolaRuangan/form.blade.php ENDPATH**/ ?>