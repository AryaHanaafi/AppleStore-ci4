<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container py-4">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Hallo, <?= session('username') ?></h1>
        <p class="text-muted">Your control panel for managing Apple-style excellence.</p>
    </div>

    <div class="row g-4">
        <!-- Manage Products -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-accessories-explore-202503?wid=800&hei=1000&fmt=p-jpg&qlt=95&.v=1739502331456"
                    class="card-img-top" alt="Manage Products" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam display-4 text-primary"></i>
                    <h5 class="mt-3 fw-semibold">Manage Products</h5>
                    <p class="text-muted small">Add, edit or remove items in your store.</p>
                    <a href="<?= base_url('produk') ?>" class="btn btn-outline-dark w-100 rounded-pill">View
                        Products</a>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-50-apple-intelligence-202503?wid=960&hei=1000&fmt=p-jpg&qlt=95&.v=1739502705864"
                    class="card-img-top" alt="Statistics" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <i class="bi bi-bar-chart-line-fill display-4 text-success"></i>
                    <h5 class="mt-3 fw-semibold">Statistics</h5>
                    <p class="text-muted small">Track your store's performance (coming soon).</p>
                    <button class="btn btn-outline-secondary w-100 rounded-pill disabled">Coming Soon</button>
                </div>
            </div>
        </div>

        <!-- User Management -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-50-TAA-202310?wid=960&hei=1000&fmt=p-jpg&qlt=95&.v=1697149577145"
                    class="card-img-top" alt="User Management" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill display-4 text-danger"></i>
                    <h5 class="mt-3 fw-semibold">User Management</h5>
                    <p class="text-muted small">Control user access and permissions (coming soon).</p>
                    <button class="btn btn-outline-secondary w-100 rounded-pill disabled">Coming Soon</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <hr class="my-5">

    <div class="text-center mb-4">
        <h4 class="fw-bold">⚡ Quick Actions</h4>
        <p class="text-muted small">Speed up your workflow with one-tap shortcuts.</p>
    </div>

    <div class="row g-3 justify-content-center mb-5">
        <div class="col-auto">
            <a href="<?= base_url('kelola-produk') ?>" class="btn btn-dark rounded-pill px-4 py-2">
                <i class="bi bi-plus-circle me-2"></i> Add Product
            </a>
        </div>
        <div class="col-auto">
            <a href="<?= base_url('laporan') ?>" class="btn btn-outline-dark rounded-pill px-4 py-2">
                <i class="bi bi-file-earmark-bar-graph me-2"></i> View Reports
            </a>
        </div>
        <div class="col-auto">
            <a href="<?= base_url('pengguna') ?>" class="btn btn-outline-dark rounded-pill px-4 py-2">
                <i class="bi bi-person-lines-fill me-2"></i> Manage Users
            </a>
        </div>
    </div>

    <!-- Today's Summary -->
    <div class="text-center mb-4">
        <h4 class="fw-bold">📊 Today’s Summary</h4>
        <p class="text-muted small">Quick glance at what's happening today.</p>
    </div>

    <div class="row text-center g-4">
        <div class="col-md-4">
            <div class="border rounded-4 p-4 shadow-sm bg-light">
                <i class="bi bi-box display-5 text-primary"></i>
                <h5 class="mt-3 mb-1">120 Products</h5>
                <small class="text-muted">Currently in Store</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="border rounded-4 p-4 shadow-sm bg-light">
                <i class="bi bi-cash-coin display-5 text-success"></i>
                <h5 class="mt-3 mb-1">35 Transactions</h5>
                <small class="text-muted">Processed Today</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="border rounded-4 p-4 shadow-sm bg-light">
                <i class="bi bi-person-check display-5 text-warning"></i>
                <h5 class="mt-3 mb-1">8 Active Users</h5>
                <small class="text-muted">Online Now</small>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>