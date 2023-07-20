
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA PRODUK</h3>
        <form action="<?php echo e(url('/produk/' .$row->produk_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="produk_no" class="form-control" value="<?php echo e($row->produk_no); ?>">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="produk_nama" class="form-control" value="<?php echo e($row->produk_nama); ?>">
            </div>
            <div class="mb-3">
                <label for="">HARGA</label>
                <input type="text" name="produk_harga" class="form-control" value="<?php echo e($row->produk_harga); ?>">
            </div>
            <div class="mb-3">
                <label for="">STOK</label>
                <input type="text" name="produk_stok" class="form-control" value="<?php echo e($row->produk_stok); ?>">
            </div>
            <div class="mb-3">
                <label for="">KETERANGAN</label>
                <input type="text" name="produk_keterangan" class="form-control" value="<?php echo e($row->produk_keterangan); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\queen-fashion\resources\views/produk/edit.blade.php ENDPATH**/ ?>