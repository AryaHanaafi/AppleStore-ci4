<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-img-wrapper p-3">
    <div class="hero-text-top">
        <h1 class="hero-title">
            <span class="iphone float-start"><b>iPhone</b></span>
            <span class="tagline float-end"><b>Design to be loved.</b></span>
        </h1>
    </div>
    <section class="hero-video">
        <video autoplay muted loop playsinline class="hero-video-bg">
            <source
                src="https://www.apple.com/105/media/us/iphone/family/2025/e7ff365a-cb59-4ce9-9cdf-4cb965455b69/anim/welcome/xlarge_2x.mp4"
                type="video/mp4">
        </video>
        <div class="hero-text">
            <h1>New iPhone Series</h1>
            <p>Future one your hand</p>
            <a href="produk">shop &rsaquo;</a>
        </div>
    </section>
</section>

<section class="mt-5">
    <div class="hero-text-top">
        <h1 class="hero-title text-center slide-in-text">
            <span class="iphone"><b>Take a closer look.</b></span>
        </h1>

    </div>
</section>

<!-- Banner Iklan dengan Efek 3D Saat Hover -->
<section class="banner-3d-wrapper">
    <div class="banner-3d" id="banner3d">
        <img src="https://www.apple.com/v/iphone-16/f/images/overview/product-viewer/iphone/all_colors__flhn5cmb1t26_xlarge_2x.jpg"
            alt="Banner Iklan">
    </div>
</section>



<section class="hero-img-wrapper pt-5 p-3">
    <div class="hero-text-top">
        <h1 class="hero-title">
            <span class="mac p-4 fs-1 float-start"><b>Mac.</b></span>
            <span class="tagline float-end"><b>If you can dream it,<br>
                    Mac can do it.</b></span>
        </h1>
    </div>
    <section class="hero-video">
        <video autoplay muted loop playsinline class="hero-video-bg">
            <source
                src="https://www.apple.com/105/media/us/mac/family/2025/59856fc1-d007-421a-90ee-734ddf3fd25d/anim/welcome/xlarge_2x.mp4">
        </video>

    </section>
</section>

<!-- Produk Scroll Horizontal -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold">Featured Products.</h2>
        </div>
        <div class="row flex-nowrap overflow-auto px-3">
            <?php foreach ($produk as $p): ?>
                <div class="col-10 col-sm-10 col-md-2 col-lg-3 me-1 flex-shrink-0">
                    <div class="card shadow-sm border-0 h-100 rounded-4">
                        <img src="<?= $p['gambar'] ?>" class="card-img-top rounded-top-4" alt="<?= $p['nama'] ?>"
                            style="object-fit: cover; height: 250px;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold"><?= $p['nama'] ?></h5>
                            <p class="card-text text-muted mb-2">$<?= number_format($p['harga'], 0, ',', '.') ?></p>
                            <a href="<?= base_url('produk') ?>" class="btn btn-outline-dark rounded-pill px-4">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Observer untuk teks
        const observerOptions = { threshold: 0.9 };
        const elementsToAnimate = document.querySelectorAll('.hero-text-top, .slide-in-text');


        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                } else {
                    entry.target.classList.remove('show');
                }
            });
        }, observerOptions);

        elementsToAnimate.forEach(el => observer.observe(el));

        // Observer untuk hero video animasi zoom
        const videos = document.querySelectorAll('.hero-video');

        const videoObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-zoom');
                } else {
                    entry.target.classList.remove('animate-zoom');
                }
            });
        }, { threshold: 0.5 });

        videos.forEach(video => videoObserver.observe(video));
    });

    // Efek 3D scroll pada banner
    const banner = document.getElementById('banner3d');

    banner.addEventListener('mousemove', (e) => {
        const rect = banner.getBoundingClientRect();
        const x = e.clientX - rect.left; // X posisi dalam elemen
        const y = e.clientY - rect.top;  // Y posisi dalam elemen
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = (centerY - y) / 20;
        const rotateY = (x - centerX) / 20;

        banner.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
    });

    banner.addEventListener('mouseleave', () => {
        banner.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
    });

</script>

<?= $this->endSection() ?>