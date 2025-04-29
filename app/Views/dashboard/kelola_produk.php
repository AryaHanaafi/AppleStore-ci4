<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <h2 class="mb-4 fw-bold text-center display-6">📦 Manage Products</h2>

    <div class="text-end mb-4">
        <a href="#" class="btn btn-dark rounded-pill px-4 shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Add Product
        </a>
    </div>

    <div class="table-responsive shadow-sm rounded-4 overflow-hidden bg-white">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light text-muted">
                <tr>
                    <th style="width: 40%;">Product Name</th>
                    <th style="width: 15%;">Stock</th>
                    <th style="width: 20%;">Price</th>
                    <th class="text-center" style="width: 25%;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="bg-light rounded-3 p-2 me-3">
                                <i class="bi bi-box-seam fs-4 text-secondary"></i>
                            </div>
                            <div>
                                <div class="fw-semibold">MASIH DALAM TAHAP</div>
                                <div class="text-muted small">Pengembangan fitur produk</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-secondary px-3 py-1">-</span></td>
                    <td><span class="text-muted">-</span></td>
                    <td class="text-center">
                        <button class="btn btn-outline-secondary btn-sm rounded-pill me-2 disabled">
                            <i class="bi bi-pencil-square me-1"></i> Edit
                        </button>
                        <button class="btn btn-outline-danger btn-sm rounded-pill disabled">
                            <i class="bi bi-trash me-1"></i> Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>