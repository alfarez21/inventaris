<?php $__env->startSection('title','Daftar Pegawai'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Daftar Pegawai</h5>
                    <a href="<?php echo e(url('')); ?>/pegawai/tambah" class="btn btn-primary px-3"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table id="tableFull" class="table table-hover table-bordered">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="10">No</th>
                            <th>NIP</th>
                            <th>Nama Pegawai</th>
                            <th>Alamat</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>009088</td>
                            <td>Muhamad Rifky</td>
                            <td>Ket</td>
                            <td class="text-center">
                                <a href="<?php echo e(url('')); ?>/pegawai/detail" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo e(url('')); ?>/pegawai/edit" title="edi" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>009088</td>
                            <td>Muhamad Rifky</td>
                            <td>Ket</td>
                            <td class="text-center">
                                <a href="<?php echo e(url('')); ?>/pegawai/detail" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo e(url('')); ?>/pegawai/edit" title="edi" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>009088</td>
                            <td>Muhamad Rifky</td>
                            <td>Ket</td>
                            <td class="text-center">
                                <a href="<?php echo e(url('')); ?>/pegawai/detail" title="detail" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo e(url('')); ?>/pegawai/edit" title="edi" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <a href="" title="hapus" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "pegawai"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/KelolaPegawai/daftar.blade.php ENDPATH**/ ?>