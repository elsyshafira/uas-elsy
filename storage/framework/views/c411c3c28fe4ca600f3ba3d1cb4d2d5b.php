
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>DATA Produk</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-secondary btn-sm float-end" href="<?php echo e(url('produk/create')); ?>">Tambah Data</a>
        <table class="table table-success table-striped">
            <tr>
                <td>NO</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>HARGA</td>
                <td>STOK</td>
                <td>KETERANGAN</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->produk_id); ?></td>
                <td><?php echo e($row->produk_no); ?></td>
                <td><?php echo e($row->produk_nama); ?></td>
                <td><?php echo e($row->produk_harga); ?></td>
                <td><?php echo e($row->produk_stok); ?></td>
                <td><?php echo e($row->produk_keterangan); ?></td>
                <td><a class="btn btn-success btn-sm float" href="<?php echo e(url('produk/' .$row->produk_id. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('produk/' .$row->produk_id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-success btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\queen-fashion\resources\views/produk/index.blade.php ENDPATH**/ ?>