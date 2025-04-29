<?php

namespace App\Controllers;

class ProdukController extends BaseController
{
    public function index()
    {
        $produk = $this->getProduk();
        return view('produk', ['produk' => $produk]);
    }

    public function getProduk()
    {
        return [
            ['id' => 1, 'nama' => 'iPhone 16 Pro', 'deskripsi' => 'A18 Pro chip powers Apple Intelligence footnote 3 and AAA gaming — and helps deliver a huge leap in battery life. Best Iphone', 'harga' => 999, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone16pro-digitalmat-gallery-3-202409?wid=728&hei=666&fmt=p-jpg&qlt=95&.v=1723843057832', 'kategori' => 'iphone', 'badge' => 'New'],
            ['id' => 2, 'nama' => 'iPhone 16', 'deskripsi' => '6.1-inch aerospace-grade aluminum design with durable latest-generation Ceramic Shield front, Action button and USB-C', 'harga' => 799, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone16-digitalmat-gallery-3-202409?wid=728&hei=666&fmt=p-jpg&qlt=95&.v=1723669127642', 'kategori' => 'iphone'],
            ['id' => 3, 'nama' => 'iPhone 16e', 'deskripsi' => 'Stunning 6.1-inch Super Retina XDR display protected by durable Ceramic Shield, tougher than any smartphone glass', 'harga' => 599, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone16e-digitalmat-gallery-3-202502?wid=728&hei=666&fmt=p-jpg&qlt=95&.v=1738086376101', 'kategori' => 'iphone', 'badge' => 'Hot Item'],
            ['id' => 4, 'nama' => 'iPhone 15', 'deskripsi' => 'Titanium. Super fast. Dynamic Island bubbles up alerts and Live Activities.', 'harga' => 699, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone15-digitalmat-gallery-4-202309?wid=728&hei=666&fmt=png-alpha&.v=1693011169045', 'kategori' => 'iphone'],

            ['id' => 5, 'nama' => 'Apple Watch Series 10', 'deskripsi' => 'The thinnest Apple Watch ever, with our biggest display. Featuring a Wide-Angle Always-On OLED Retina display. Get health insights day and night.', 'harga' => 399, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-s10-202409?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1724168059157', 'kategori' => 'watch'],
            ['id' => 6, 'nama' => 'Apple Watch Ultra 2', 'deskripsi' => 'The ultimate sports and adventure watch with a rugged 49mm titanium case and the most accurate GPS.', 'harga' => 799, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-ultra2-202409?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1724168059585', 'kategori' => 'watch', 'badge' => 'Best Seller'],
            ['id' => 7, 'nama' => 'Apple Watch Hermès Series 10', 'deskripsi' => 'The thinnest Apple Watch ever, with our biggest display. Featuring a Wide-Angle Always-On OLED Retina display.', 'harga' => 1249, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-hermes-202503?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1739545414698', 'kategori' => 'watch', 'badge' => 'Luxury Edition'],
            ['id' => 8, 'nama' => 'Apple Watch Hermès Ultra 2', 'deskripsi' => 'Rugged 49mm natural titanium case with 100-meter water resistance. Adventure ready.', 'harga' => 1399, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-hermes-ultra-202503?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1739545415943', 'kategori' => 'watch', 'badge' => 'Elite'],
            ['id' => 9, 'nama' => 'Apple Watch SE', 'deskripsi' => 'Set up Apple Watch for your kids, even without their own iPhone. Stay active with various workout types.', 'harga' => 249, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-se-202503?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1739545408583', 'kategori' => 'watch'],

            ['id' => 10, 'nama' => 'iPad Pro 11-inch', 'deskripsi' => 'Apple Intelligence helps you write, express yourself, and get things done effortlessly with groundbreaking privacy protections.', 'harga' => 999, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-pro-202405?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1713920820026', 'kategori' => 'ipad'],
            ['id' => 11, 'nama' => 'iPad Air 13-inch', 'deskripsi' => 'Apple M3 chip powers Apple Intelligence, incredible performance, and advanced graphics.', 'harga' => 799, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-air-202405?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1713920820139', 'kategori' => 'ipad', 'badge' => 'Hot Item'],
            ['id' => 12, 'nama' => 'iPad', 'deskripsi' => 'All-screen design with 11-inch Liquid Retina display powered by the A16 chip.', 'harga' => 349, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-ipad-202410?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1727714411651', 'kategori' => 'ipad'],
            ['id' => 13, 'nama' => 'iPad Air', 'deskripsi' => 'A17 Pro chip for ultrafast performance, all-day battery life, and Apple Pencil compatibility.', 'harga' => 499, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-ipad-mini-202410?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1727281366305', 'kategori' => 'ipad'],
        ];
    }
}
