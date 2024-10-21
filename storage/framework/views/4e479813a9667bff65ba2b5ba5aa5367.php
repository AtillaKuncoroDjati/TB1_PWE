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

        <!-- Product Grid -->
        <div class="product-grid">
            <!-- Product Card 1 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 1">
                <h3>Produk 1</h3>
                <p class="price">Rp 100,000</p>
                <p class="description">Deskripsi singkat produk 1.</p>
                <button class="card-button"> + </button>
                <button class="card-button"> - </button>
            </div>
            <!-- Product Card 2 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 2">
                <h3>Produk 2</h3>
                <p class="price">Rp 200,000</p>
                <p class="description">Deskripsi singkat produk 2.</p>
                <button class="card-button"> + </button>
                <button class="card-button"> - </button>
            </div>
            <!-- Product Card 3 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 3">
                <h3>Produk 3</h3>
                <p class="price">Rp 300,000</p>
                <p class="description">Deskripsi singkat produk 3.</p>
                <button class="card-button"> + </button>
                <button class="card-button"> - </button>
            </div>
            <!-- Product Card 4 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 4">
                <h3>Produk 4</h3>
                <p class="price">Rp 400,000</p>
                <p class="description">Deskripsi singkat produk 4.</p>
                <button class="card-button"> + </button>
                <button class="card-button"> - </button>
            </div>
        </div>
    </div>

    <!-- Footer -->

</body>
</html>
<?php /**PATH D:\laravel11\adriyan\resources\views/produk.blade.php ENDPATH**/ ?>