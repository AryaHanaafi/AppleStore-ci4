<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="p-5 bg-light rounded-4 shadow-sm text-center mb-5">
    <h1 class="display-4 fw-bold mb-3">Hallo, <?= session('username') ?> 👋</h1>
    <p class="lead text-muted">Continue exploring the best Apple products and premium services we offer.</p>
    <a href="<?= base_url('kategori') ?>" class="btn btn-dark btn-lg rounded-pill px-5 py-2 mt-3">Explore Products</a>
</div>

<div class="row g-4">
    <!-- Top Categories Card with background -->
    <div class="col-md-6">
        <div class="rounded-4 shadow-sm text-white position-relative overflow-hidden" style="
            background: url('https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-50-applecare-202503?wid=960&hei=1000&fmt=p-jpg&qlt=95&.v=1739502784257') center/cover no-repeat;
            min-height: 400px;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 rounded-4 p-4">
                <h4 class="fw-semibold mb-3">Top Categories 🔥</h4>
                <ul class="list-unstyled ps-2">
                    <li class="mb-2">
                        <a href="<?= base_url('kategori/iphone') ?>" class="text-white text-decoration-none fw-medium">
                            <i class="bi bi-phone me-2"></i> iPhone
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= base_url('kategori/ipad') ?>" class="text-white text-decoration-none fw-medium">
                            <i class="bi bi-tablet me-2"></i> iPad
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('kategori/watch') ?>" class="text-white text-decoration-none fw-medium">
                            <i class="bi bi-watch me-2"></i> Apple Watch
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Cart Card with background -->
    <div class="col-md-6">
        <div class="rounded-4 shadow-sm text-white position-relative overflow-hidden" style="
            background: url('https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-50-personal-setup-202408_GEO_US?wid=960&hei=1000&fmt=jpeg&qlt=95&.v=1727714996705') center/cover no-repeat;
            min-height: 400px;">
            <div
                class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 rounded-4 p-4 d-flex flex-column justify-content-between">
                <div>
                    <h4 class="fw-semibold mb-3">Your Shopping Cart 🛒</h4>
                    <p class="text-white">Review and manage the items you’ve added to your cart.</p>
                </div>
                <a href="<?= base_url('keranjang') ?>"
                    class="btn btn-outline-light rounded-pill mt-2 px-4 py-2 w-auto">View Cart</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>