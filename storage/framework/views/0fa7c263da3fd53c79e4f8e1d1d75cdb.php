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
        <header>
            <h1>Produk Tersedia</h1>
        </header>

        <div class="product-grid">
            <!-- Product Card 1 -->
            <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 1">
                <h3><?php echo e($item->nama_produk); ?></h3>
                <p class="price"><?php echo e($item->harga); ?></p>
                <p class="description"><?php echo e($item->deskripsi); ?></p>
                <button class="card-button">Edit</button>
                <button class="card-button">Delete</button>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <!-- Footer -->

</body>
</html>
<?php /**PATH C:\laravel11\adriyan\resources\views/produk.blade.php ENDPATH**/ ?>