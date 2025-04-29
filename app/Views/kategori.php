<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<style>

</style>

<!-- SECTION ATAS -->
<div class="store-section">
    <h1 class="store-title"><span>Store.</span> The best way to buy the products you love.</h1>
    <div class="store-icons">
        <a href="<?= base_url('/kategori/iphone') ?>" class="store-icon">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone16e-digitalmat-gallery-1-202502_GEO_US?wid=728&hei=666&fmt=p-jpg&qlt=95&.v=1738706423809"
                alt="iPhone">
            <p>iPhone</p>
        </a>
        <a href="<?= base_url('/kategori/ipad') ?>" class="store-icon">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-digitalmat-gallery-2-202310?wid=728&hei=666&fmt=png-alpha&.v=1696004282418"
                alt="iPad">
            <p>iPad</p>
        </a>
        <a href="<?= base_url('/kategori/watch') ?>" class="store-icon">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-hermes-ultra-digitalmat-gallery-2-202503?wid=728&hei=666&fmt=png-alpha&.v=1740614392397"
                alt="Watch">
            <p>Watch</p>
        </a>
    </div>
</div>

<!-- SECTION KATEGORI -->
<div class="compare-container">
    <div class="compare-title">Category</div>
    <div class="compare-grid">
        <a href="<?= base_url('/kategori/iphone') ?>" class="compare-card">
            <div class="compare-card-label">Compare All Models</div>
            <div class="compare-card-subtitle">Which iPhone is right for you?</div>
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-card-50-compare-202409?wid=960&hei=1000&fmt=p-jpg&qlt=95&.v=1723564949528"
                alt="iPhone">
        </a>

        <a href="<?= base_url('/kategori/ipad') ?>" class="compare-card">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-ipad-air-202503?wid=800&hei=1000&fmt=p-jpg&qlt=95&.v=1740783181594"
                alt="iPad Air">
            <div class="compare-card-content"
                style="position: absolute; top: 1rem; left: 1rem; color: #000; max-width: 85%;">
                <h4 style="font-size: 1.4rem; font-weight: bold; margin-bottom: 0.3rem;">iPad Draw your Story</h4>
                <p style="font-size: 1rem; margin-bottom: 0.2rem;">
                    <span
                        style="background: linear-gradient(to right, #0070c9, #bf0a30); -webkit-background-clip: text; color: transparent;">
                        Lovable.△<br>Drawable<br>Magical.
                    </span>
                </p>
            </div>
        </a>

        <a href="<?= base_url('/kategori/watch') ?>" class="compare-card">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-watch-s10-202409?wid=800&hei=1000&fmt=jpeg&qlt=90&.v=1724095131742"
                alt="Apple Watch Series 10">
            <div class="compare-card-content"
                style="position: absolute; top: 1rem; left: 1rem; color: #000; max-width: 85%;">
                <h4 style="font-size: 1.4rem; font-weight: bold; margin-bottom: 0.3rem;">Apple Watch for <br>a Healthy
                    life</h4>
                <p style="font-size: 1rem; margin-bottom: 0.2rem;">Thinstant classic.</p>
            </div>
        </a>
    </div>
</div>

<?= $this->endSection(); ?>