<?php $__env->startSection('title',"$aksi Barang"); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0"><?php echo e($aksi); ?> Barang</h5>
                        <a href="<?php echo e(url('')); ?>/barang" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(url('')); ?>/<?php echo e($aksi); ?>barang" method="post">
                        <?php echo csrf_field(); ?>
                        <?php if($aksi=="Edit"): ?>
                            <input type="hidden" class="form-control" name="id" id="kode" value="<?php echo e($inventaris->id_inventaris); ?>">
                        <?php endif; ?>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="kode" id="kode" <?php if($aksi=="Edit"): ?> value="<?php echo e($inventaris->kode_inventaris); ?>" <?php endif; ?>>
                                <?php $__errorArgs = ['kode'];
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
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama" id="nama" <?php if($aksi=="Edit"): ?> value="<?php echo e($inventaris->nama); ?>" <?php endif; ?>>
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
                            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-3">
                                <select class="form-control select2bs4" id="jenis" name="jenis" style="width: 100%;">
                                    <option value="0">-- Jenis ---</option>
                                    <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($aksi=="Edit"): ?>
                                            <?php if($jen->id_jenis==$inventaris->id_jenis): ?>
                                                <option value="<?php echo e($jen->id_jenis); ?>" selected><?php echo e($jen->nama_jenis); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($jen->id_jenis); ?>"><?php echo e($jen->nama_jenis); ?></option>
                                            <?php endif; ?>
                                        <?php else: ?>
                                           <option value="<?php echo e($jen->id_jenis); ?>"><?php echo e($jen->nama_jenis); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['jenis'];
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
                            <label for="ruang" class="col-sm-2 col-form-label">Ruang</label>
                            <div class="col-sm-3">
                                <select class="form-control select2bs4" id="ruang" name="ruang" style="width: 100%;">
                                    <option value="0">-- Ruangan ---</option>
                                    <?php $__currentLoopData = $ruang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($aksi=="Edit"): ?>
                                            <?php if($ru->id_ruang==$inventaris->id_ruang): ?>
                                                <option value="<?php echo e($ru->id_ruang); ?>" selected><?php echo e($ru->nama_ruang); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($ru->id_ruang); ?>"><?php echo e($ru->nama_ruang); ?></option>
                                            <?php endif; ?>
                                        <?php else: ?>
                                           <option value="<?php echo e($ru->id_ruang); ?>"><?php echo e($ru->nama_ruang); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['ruang'];
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
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="jumlah" name="jumlah" <?php if($aksi=="Edit"): ?> value="<?php echo e($inventaris->jumlah); ?>" <?php endif; ?>>
                                <?php $__errorArgs = ['jumlah'];
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
                            <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="kondisi" name="kondisi" <?php if($aksi=="Edit"): ?> value="<?php echo e($inventaris->kondisi); ?>" <?php endif; ?>>
                                <?php $__errorArgs = ['kondisi'];
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
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" id="keterangan" name="keterangan"><?php if($aksi=="Edit"): ?><?php echo e($inventaris->keterangan); ?><?php endif; ?> </textarea>
                                <?php $__errorArgs = ['keterangan'];
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
                                <a href="<?php echo e(url('')); ?>/barang" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
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
<?php echo $__env->make('dashboard.main',["alink"=>"barang"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaBarang/form.blade.php ENDPATH**/ ?>