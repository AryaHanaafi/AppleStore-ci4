<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if ($kategori == 'iphone'): ?>
    <section class="hero-img-wrapper">
        <div class="hero-text-start">
            <h1 class="hero-title">
                <span class="iphone"><b>iPhone Store</b></span>
            </h1>
        </div>

        <div class="hero-section">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone16-digitalmat-gallery-1-202409_GEO_US?wid=728&hei=666&fmt=p-jpg&qlt=95&.v=1723669127697"
                alt="iPhone Hero" style="max-width: 70%; height: 500px; margin-bottom: 20px;">
            <h1>Temukan iPhone terbaik untukmu.</h1>
            <a href="<?= base_url('produk') ?>" class="btn btn-outline-dark mt-4">Lihat Semua Produk</a>
        </div>

        <div class="text-center my-5">
            <span class="text-uppercase text-warning small fw-semibold">New</span>
            <h1 class="fw-bold display-5">iPhone 16</h1>
            <p class="lead text-muted">Faster. and Smarter.<br>Ready Now. Start from <strong>$799</strong></p>

            <div class="d-flex justify-content-center gap-3 my-3">
                <a href="#" class="btn btn-link text-primary fw-semibold text-decoration-none">
                    Lebih lanjut <i class="fas fa-chevron-right ms-1"></i>
                </a>
                <a href="#" class="btn btn-primary rounded-pill px-4 fw-semibold">
                    Beli Sekarang
                </a>
            </div>

            <img src="https://ibox.co.id/_next/image?url=https%3A%2F%2Fcdnpro.eraspace.com%2Fmedia%2Fwysiwyg%2Fibox-banner%2FIMG_3138.jpeg&w=1920&q=75"
                alt="iPhone 16" class="img-fluid mt-0" style="max-height: 400px;">
        </div>
    </section>

<?php elseif ($kategori == 'ipad'): ?>
    <section class="hero-img-wrapper">
        <div class="hero-text-start">
            <h1 class="hero-title">
                <span class="iphone"><b>iPad Draw Store</b></span>
            </h1>
        </div>

        <div class="hero-section">
            <img src="https://www.apple.com/v/ipad-11/a/images/overview/hero/hero__ecv967jz1y82_large.jpg" alt="iPad Hero"
                style="max-width: 70%; height: 500px; margin-bottom: 20px;">
            <h1>Draw your Dreams. with Us</h1>
            <a href="<?= base_url('produk') ?>" class="btn btn-outline-dark mt-4">Lihat Semua Produk</a>
        </div>
    </section>

    <section class="ipad-feature d-flex flex-wrap align-items-center justify-content-center py-5"
        style="background-color: #fff;">
        <div class="text-content pe-md-5 ps-md-5" style="max-width: 500px;">
            <h4 class="fw-bold mt-3">iPadOS</h4>
            <p class="text-muted">
                brings it all together and makes everything on iPad feel smooth and easy.
                Handwritten notes become more fluid, flexible, and legible with Smart Script.
                And you can solve complex equations in Math Notes using Apple Pencil.
            </p>
            <a href="#" class="text-primary fw-semibold text-decoration-none">Learn more about iPadOS &gt;</a>
        </div>

        <div class="image-content mt-4 mt-md-0">
            <img src="https://www.apple.com/v/ipad-11/a/images/overview/design/multiple_apps__figbbueogiqi_large.jpg"
                alt="iPadOS Feature" class="img-fluid" style="max-height: 600px; border-radius: 30px;">
        </div>
    </section>

<?php elseif ($kategori == 'watch'): ?>
    <section class="hero-img-wrapper">
        <div class="hero-text-top">
            <h1 class="hero-title">
                <span class="iphone"><b>Apple Watch</b></span>
            </h1>
        </div>

        <div class="hero-section">
            <img src="https://www.apple.com/v/apple-watch-nike/ah/images/overview/hero__fasztbsytre6_large.jpg"
                alt="Watch Hero" style="max-width: 100%; height: 500px; margin-bottom: 20px;">
            <h1>Watch your Future.</h1>
            <a href="<?= base_url('produk') ?>" class="btn btn-outline-dark mt-4">Lihat Semua Produk</a>
        </div>

        <div class="container">
            <h1 class="fw-bold display-5 mb-4">Apple Watch essentials.</h1>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="watch-card"
                        style="background-image: url('https://www.apple.com/v/apple-watch-hermes/ah/images/hardware/design_band__cbq19xzr9swi_large_2x.jpg');">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="watch-card"
                        style="background-image: url('https://www.apple.com/v/apple-watch-hermes/ah/images/hardware/design_clock__dylo106nxey6_large_2x.jpg');">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- BAGIAN LIST PRODUK (UNTUK SEMUA KATEGORI) -->
<?php if (!empty($produk)): ?>
    <?php foreach ($produk as $index => $p): ?>
        <div class="container py-5 border-bottom">
            <div class="row align-items-center">
                <!-- Teks -->
                <div class="col-md-6 order-md-<?= $index % 2 == 0 ? '1' : '2' ?>">
                    <span class="text-uppercase text-warning fw-semibold small">NEW</span>
                    <h2 class="fw-bold display-5"><?= $p['nama'] ?></h2>
                    <p class="lead text-muted"><?= $p['deskripsi'] ?><br>
                        Kini tersedia. Mulai dari <strong><?= '$' . number_format($p['harga'], 0, ',', '.') ?></strong></p>
                    <a href="<?= base_url('produk') ?>" class="btn btn-outline-primary rounded-pill px-4 fw-semibold mt-2">Beli
                        sekarang</a>
                </div>

                <!-- Gambar -->
                <div class="col-md-6 order-md-<?= $index % 2 == 0 ? '2' : '1' ?> text-center">
                    <img src="<?= $p['gambar'] ?>" alt="<?= $p['nama'] ?>" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p class="text-center">Tidak ada produk dalam kategori ini.</p>
<?php endif; ?>

<?= $this->endSection() ?>