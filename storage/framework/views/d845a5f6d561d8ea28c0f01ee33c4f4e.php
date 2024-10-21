<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/styles.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(url('produk')); ?>">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header style="display: flex; justify-content:space-between">
            <div>
                <h1>Daftar Produk</h1>
                <p>Temukan produk terbaik untuk kebutuhan Anda</p>
            </div>
            <div>
                <button class="card-button">
                    <a class="text-decoration-none text-wh" href="<?php echo e(url('/produk/add')); ?>">Add Product</a>
                </button>
            </div>
        </header>

        <!-- Product Grid -->
        <div class="product-grid">
            <!-- Product Card -->
            <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-card">
                <img src="<?php echo e(url('storage/public/images/' . $item->image)); ?>" alt="Produk">
                <h3><?php echo e($item->nama_produk); ?></h3>
                <p class="price"><?php echo e($item->harga); ?></p>
                <p class="description"><?php echo e($item->deskripsi); ?></p>

                <!-- Edit Button -->
                <a href="<?php echo e(url('produk/edit/' . $item->kode_produk)); ?>">
                    <button class="card-button">Edit</button>
                </a>

                <!-- Delete Button -->
                <form action="<?php echo e(url('produk/delete/' . $item->kode_produk)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\ella3\OneDrive\Dokumen\UNIVERSITAS MERCU BUANA\SEMESTER 5\PWE\Atilla Kuncoro Djati\atillakd\resources\views/produk.blade.php ENDPATH**/ ?>