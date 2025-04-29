<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h2 class="fw-bold text-dark mb-0">Keranjang Saya</h2>
            <a href="<?= site_url('produk') ?>" class="btn btn-outline-dark rounded-pill px-4">Lanjut Belanja</a>
        </div>

        <?php if (empty($keranjang)): ?>
            <div class="text-center py-5">
                <i class="bi bi-cart-x display-1 text-muted mb-3"></i>
                <h5 class="text-muted">Keranjang kamu masih kosong.</h5>
                <a href="<?= site_url('produk') ?>" class="btn btn-dark mt-3 rounded-pill px-4">Belanja Sekarang</a>
            </div>
        <?php else: ?>
            <?php $totalHarga = 0; ?>

            <div class="row">
                <!-- KIRI: Daftar Produk -->
                <div class="col-lg-8">
                    <?php foreach ($keranjang as $id => $item): ?>
                        <?php
                        $subtotal = $item['harga'] * $item['qty'];
                        $totalHarga += $subtotal;
                        ?>
                        <div class="mb-4 border-0 shadow-sm rounded-4">
                            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                                <div class="d-flex align-items-start">
                                    <img src="<?= $item['gambar'] ?>" alt="<?= esc($item['nama']) ?>" width="100"
                                        class="rounded-4 me-4 shadow-sm">
                                    <div>
                                        <h5 class="fw-semibold mb-1"><?= esc($item['nama']) ?></h5>
                                        <p class="text-muted small mb-2">Qty: <?= $item['qty'] ?>
                                            $<?= number_format($item['harga'], 0, ',', '.') ?></p>
                                        <div class="d-flex gap-3 text-muted small">
                                            <span><i class="bi bi-shop me-1"></i> Pickup</span>
                                            <span><i class="bi bi-truck me-1"></i> Kirim</span>
                                        </div>
                                        <button onclick="hapusItem(<?= $item['id'] ?>)"
                                            class="btn btn-link text-danger small mt-2 px-0">
                                            <i class="bi bi-trash me-1"></i> Hapus
                                        </button>
                                    </div>
                                </div>
                                <div class="text-end mt-3 mt-md-0">
                                    <div class="d-flex align-items-center justify-content-end mb-2">
                                        <button class="btn btn-outline-dark btn-sm rounded-pill me-2"
                                            onclick="updateQuantity('<?= $id ?>', 'kurang')">−</button>
                                        <span class="mx-2"><?= $item['qty'] ?></span>
                                        <button class="btn btn-outline-dark btn-sm rounded-pill ms-2"
                                            onclick="updateQuantity('<?= $id ?>', 'tambah')">+</button>
                                    </div>
                                    <div class="fw-bold fs-5 text-dark">$<?= number_format($subtotal, 0, ',', '.') ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- KANAN: Ringkasan Pesanan (Struk) -->
                <div class="col-lg-4">
                    <div class="border-0 shadow-sm rounded-4 sticky-top" style="top: 90px;">
                        <div class="card-body">
                            <h5 class="fw-semibold mb-4">Ringkasan Pesanan</h5>
                            <ul class="list-group list-group-flush mb-3">
                                <?php foreach ($keranjang as $item): ?>
                                    <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold"><?= esc($item['nama']) ?></div>
                                            <small class="text-muted"><?= $item['qty'] ?> ×
                                                $<?= number_format($item['harga'], 0, ',', '.') ?></small>
                                        </div>
                                        <div class="fw-bold text-dark">
                                            $<?= number_format($item['harga'] * $item['qty'], 0, ',', '.') ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <hr>
                            <div class="d-flex justify-content-between mb-3">
                                <span class="fw-semibold">Total</span>
                                <span class="fw-bold fs-5 text-dark">$<?= number_format($totalHarga, 0, ',', '.') ?></span>
                            </div>
                            <a href="<?= site_url('checkout') ?>" class="btn btn-primary btn-lg w-100 rounded-pill">Lanjut
                                Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    function updateQuantity(productId, action) {
        fetch('<?= base_url('transaksi/update-keranjang') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': '<?= csrf_hash() ?>'
            },
            body: JSON.stringify({ id: productId, action: action })
        })
            .then(res => res.json())
            .then(data => {
                if (data.success) location.reload();
                else alert(data.message || 'Gagal update jumlah.');
            })
            .catch(err => console.error('Update gagal:', err));
    }

    function hapusItem(id) {
        fetch("<?= base_url('transaksi/hapusItem') ?>", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ id: id })
        })
            .then(res => res.json())
            .then(data => {
                if (data.success) location.reload();
                else alert("Gagal menghapus item: " + data.message);
            })
            .catch(err => {
                console.error("Error:", err);
                alert("Terjadi kesalahan saat menghapus item.");
            });
    }
</script>
<?= $this->endSection() ?>