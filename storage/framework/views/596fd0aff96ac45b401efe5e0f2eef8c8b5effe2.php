<?php $__env->startSection('title',"$aksi Petugas"); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0"><?php echo e($aksi); ?> Petugas</h5>
                        <a href="<?php echo e(url('')); ?>/petugas" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(url('')); ?>/<?php echo e($aksi); ?>petugas" method="post">
                        <?php echo csrf_field(); ?>
                        <?php if($aksi=="Edit"): ?><input type="hidden" class="form-control" name="id" value="<?php echo e($petugas->id_petugas); ?>"><?php endif; ?>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="username" id="username" value="<?php if($aksi=="Edit"): ?><?php echo e($petugas->username); ?><?php endif; ?>">
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="small muted text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" id="Nama" value="<?php if($aksi=="Edit"): ?><?php echo e($petugas->nama_petugas); ?><?php endif; ?>">
                                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="small muted text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Level" class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-2">
                                <select class="form-control select2bs4" id="Level" name="level" style="width: 100%;">
                                    <option value="0">-- Level --</option>
                                    <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lvl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <?php if($aksi=="Edit"): ?>
                                            <?php if($lvl->id_level==$petugas->id_level): ?>
                                                <option value="<?php echo e($lvl->id_level); ?>" selected><?php echo e($lvl->nama_level); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($lvl->id_level); ?>"><?php echo e($lvl->nama_level); ?></option>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <option value="<?php echo e($lvl->id_level); ?>"><?php echo e($lvl->nama_level); ?></option>
                                        <?php endif; ?>
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="small muted text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php echo $__env->make('dashboard.main',["alink"=> "petugas"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaPetugas/form.blade.php ENDPATH**/ ?>