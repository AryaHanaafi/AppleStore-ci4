<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <h2 class="text-center fw-bold mb-5">Apple Products</h2>

    <?php
    $kategori = [
        'iPhone' => array_filter($produk, fn($p) => $p['kategori'] === 'iphone'),
        'Apple Watch' => array_filter($produk, fn($p) => $p['kategori'] === 'watch'),
        'iPad' => array_filter($produk, fn($p) => $p['kategori'] === 'ipad'),
    ];
    ?>

    <?php foreach ($kategori as $namaKategori => $daftarProduk): ?>
        <h4 class="fw-semibold mb-3"><?= $namaKategori ?></h4>
        <div class="d-flex overflow-auto mb-5 gap-4 pb-3">
            <?php foreach ($daftarProduk as $id => $item): ?>
                <div class="card border-0 shadow-sm rounded-4 d-flex flex-column text-center p-4 h-100 position-relative"
                    style="min-width: 350px; max-width: 320px;">

                    <?php if (!empty($item['badge'])): ?>
                        <?php
                        $badgeColors = [
                            'New' => 'bg-success',
                            'Hot Item' => 'bg-danger',
                            'Best Seller' => 'bg-warning text-dark',
                            'Promo' => 'bg-pink text-white',
                            'Featured' => 'bg-primary',
                        ];
                        $badgeClass = $badgeColors[$item['badge']] ?? 'bg-secondary';
                        ?>
                        <div class="position-absolute top-0 start-0 m-2">
                            <span class="badge <?= $badgeClass ?> px-3 py-1 rounded-pill small shadow-sm">
                                <?= esc($item['badge']) ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <img src="<?= $item['gambar'] ?>" alt="<?= esc($item['nama']) ?>" class="mb-3 mx-auto"
                        style="height: 180px; object-fit: contain;">

                    <h5 class="fw-semibold mb-2"><?= esc($item['nama']) ?></h5>

                    <p class="text-muted small mb-3">
                        From $<?= number_format($item['harga'], 0) ?><br>
                        <span class="text-dark">$<?= number_format($item['harga'] / 12, 2) ?>/mo.</span>
                    </p>

                    <div class="mt-auto d-flex justify-content-center gap-2">
                        <button class="btn btn-outline-dark btn-sm rounded-pill px-3" data-bs-toggle="modal"
                            data-bs-target="#viewModal-<?= $item['id'] ?>">
                            <i class="fas fa-eye me-1"></i> View
                        </button>

                        <button class="btn btn-dark btn-sm rounded-pill px-3" onclick="addToCart(<?= $item['id'] ?>)">
                            <i class="fas fa-shopping-bag me-1"></i> Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Modal View Produk -->
                <div class="modal fade" id="viewModal-<?= $item['id'] ?>" tabindex="-1"
                    aria-labelledby="viewModalLabel-<?= $item['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-6 d-flex align-items-center justify-content-center p-4">
                                    <img src="<?= $item['gambar'] ?>" alt="<?= esc($item['nama']) ?>"
                                        class="img-fluid rounded-3 shadow-sm" style="max-height: 300px; object-fit: contain;">
                                </div>
                                <div class="col-md-6 p-4">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <h5 class="fw-bold mb-0"><?= esc($item['nama']) ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <p class="text-muted mb-3"><?= esc($item['deskripsi']) ?></p>
                                    <h6 class="fw-semibold text-dark mb-4">Price: $<?= number_format($item['harga'], 0) ?></h6>
                                    <div class="d-flex gap-3">
                                        <button class="btn btn-outline-dark rounded-pill px-4"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button class="btn btn-dark rounded-pill px-4" onclick="addToCart(<?= $item['id'] ?>)">
                                            <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Konfirmasi -->
                <div class="modal fade" id="confirmModal-<?= $item['id'] ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content text-center">
                            <div class="modal-body py-5">
                                <i class="bi bi-check-circle-fill text-success fs-1 mb-3"></i>
                                <h5 class="fw-bold">Berhasil ditambahkan ke keranjang!</h5>
                                <p class="text-muted">Produk <strong><?= esc($item['nama']) ?></strong> telah ditambahkan.</p>
                                <a href=""><button class="btn btn-outline-secondary mt-3"
                                        data-bs-dismiss="modal">OK</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- Tambahkan Font Awesome untuk ikon -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

<script>
    function addToCart(productId) {
        fetch('<?= base_url('transaksi/tambah-ke-keranjang') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ id: productId })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const modalId = '#confirmModal-' + productId;
                    const modal = new bootstrap.Modal(document.querySelector(modalId));
                    modal.show();

                    if (data.totalItem !== undefined) {
                        document.getElementById('cart-count').innerText = data.totalItem;
                    }
                } else {
                    alert(data.message || 'Gagal menambahkan ke keranjang.');
                }
            })
            .catch(error => {
                console.error('Gagal menambahkan ke keranjang:', error);
            });
    }
</script>
<?= $this->endSection() ?>