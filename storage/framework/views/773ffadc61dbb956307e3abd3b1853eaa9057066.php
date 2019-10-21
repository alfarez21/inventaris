<?php $__env->startSection('title','Beranda'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Beranda</h5>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    Selamat Datang Di Aplikasi 
                </div>
                <!-- ./card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.main',["alink"=> "Beranda"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lks\invetaris\resources\views/beranda.blade.php ENDPATH**/ ?>