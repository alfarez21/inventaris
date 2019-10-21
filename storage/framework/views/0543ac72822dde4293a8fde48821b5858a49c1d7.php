<?php $__env->startSection('title','Detail Peminjaman'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Detail Peminjaman</h5>
                    <a href="<?php echo e(url('')); ?>/peminjaman" title="kembali" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="card-body">
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <table>
                    <tr>
                        <td class="py-2" width="178"><strong>Nama Pegawai</strong></td>
                        <td><?php echo e($pinjam->nama_pegawai); ?></td>
                    </tr>
                    <tr>
                        <td class="py-2" width="178"><strong>Tanggal Pinjam</strong></td>
                        <td><?php echo e($pinjam->tanggal_pinjam); ?></td>
                    </tr>
                    <tr>
                        <td class="py-2" width="178"><strong>Tanggal Kembali</strong></td>
                        <td><?php echo e($pinjam->tanggal_kembali); ?></td>
                    </tr>
                </table>
                <form action="<?php echo e(url('')); ?>/tamdetailpinjam" method="post" class="mt-2">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" class="form-control" name="id" value="<?php echo e($pinjam->id_peminjaman); ?>">
                    <div class="form-group row">
                        <label for="kode" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-4">
                            <select class="form-control select2bs4" id="inventaris" name="inventaris" style="width: 100%;">
                                <option value="0">-- Inventaris --</option>
                                <?php $__currentLoopData = $inventaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($inv->id_inventaris); ?>"><?php echo e($inv->nama); ?></option>                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="jumlah" name="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-2">
                            <button type="submit" title="simpan" class="btn btn-success"><i class="fas fa-save"></i></button>
                            <a href="<?php echo e(url('')); ?>/petugas" title="batal" class="btn btn-warning"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </form>
                <br>
                <table id="tableFull"  class="table table-bordered">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="10">No</th>
                            <th>Nama Barang</th>
                            <th width="100">Jumlah</th>
                            <th width="30">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $detail_pinjam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($dp->nama); ?></td>
                                <td class="text-center"><?php echo e($dp->jumlah); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('')); ?>/peminjaman/hapusdetail/<?php echo e($dp->id_detail_pinjam); ?>" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
<?php echo $__env->make('dashboard.main',["alink"=> "peminjaman"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaPeminjaman/detailPinjam.blade.php ENDPATH**/ ?>