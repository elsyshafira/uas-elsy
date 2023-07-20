
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA KATEGORI</h3>
        <form action="<?php echo e(url('/kategori/' .$row->kat_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">KAT ID</label>
                <input type="text" name="kat_id" class="form-control" value="<?php echo e($row->kat_id); ?>">
            </div>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="kat_kode" class="form-control" value="<?php echo e($row->kat_kode); ?>">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="kat_nama" class="form-control" value="<?php echo e($row->kat_nama); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\queen-fashion\resources\views/kategori/edit.blade.php ENDPATH**/ ?>