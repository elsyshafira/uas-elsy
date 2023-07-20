
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA KATEGORI</h3>
        <form action="<?php echo e(url('/kategori')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">KAT ID</label>
                <input type="text" name="kat_id" class="form-control" placeholder="ID Kategori">
            </div>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="kat_kode" class="form-control" placeholder="Kode Kategori">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="kat_nama" class="form-control" placeholder="Nama Kategori">
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\queen-fashion\resources\views/kategori/create.blade.php ENDPATH**/ ?>