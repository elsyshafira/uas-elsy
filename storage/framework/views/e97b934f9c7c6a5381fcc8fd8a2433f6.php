
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA Produk</h3>
        <form action="<?php echo e(url('/produk')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="produk_no" class="form-control" placeholder="Kode">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="produk_nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">HARGA</label>
                <input type="text" name="produk_harga" class="form-control" placeholder="HARGA">
            </div>
            <div class="mb-3">
                <label for="">STOK</label>
                <input type="text" name="produk_stok" class="form-control" placeholder="STOK">
            </div>
            <div class="mb-3">
                <label for="">KETERANGAN</label>
                <input type="text" name="produk_keterangan" class="form-control" placeholder="KETERANGAN">
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\queen-fashion\resources\views/produk/create.blade.php ENDPATH**/ ?>