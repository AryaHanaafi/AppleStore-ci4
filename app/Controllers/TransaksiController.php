<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TransaksiController extends BaseController
{
    public function tambahKeKeranjang()
    {
        $request = $this->request->getJSON(true);
        $idProduk = $request['id'] ?? null;

        // Data produk disamakan dengan yang ada di ProdukController
        $produkList = [
            ['id' => 1, 'nama' => 'iPhone 16 Pro', 'deskripsi' => 'A18 Pro chip powers Apple Intelligence footnote 3 and AAA gaming — and helps deliver a huge leap in battery life. Best Iphone', 'harga' => 999, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone16pro-digitalmat-gallery-3-202409?wid=728&hei=666&fmt=p-jpg&qlt=95&.v=1723843057832', 'kategori' => 'iphone'],
            ['id' => 2, 'nama' => 'iPhone 16', 'deskripsi' => '6.1-inch aerospace-grade aluminum design footnote 1 with durable latest-generation Ceramic Shield front, Action button and USB-C', 'harga' => 799, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone16-digitalmat-gallery-3-202409?wid=728&hei=666&fmt=p-jpg&qlt=95&.v=1723669127642', 'kategori' => 'iphone'],
            ['id' => 3, 'nama' => 'iPhone 16e', 'deskripsi' => 'Stunning 6.1-inch Super Retina XDR display¹ protected by durable Ceramic Shield, tougher than any smartphone glass', 'harga' => 599, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone16e-digitalmat-gallery-3-202502?wid=728&hei=666&fmt=p-jpg&qlt=95&.v=1738086376101', 'kategori' => 'iphone'],
            ['id' => 4, 'nama' => 'iPhone 15', 'deskripsi' => 'Titanium. Super fast. Dynamic Island bubbles up alerts and Live Activities — so you don’t miss them while you’re doing something else', 'harga' => 699, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone15-digitalmat-gallery-4-202309?wid=728&hei=666&fmt=png-alpha&.v=1693011169045', 'kategori' => 'iphone'],

            //apple watch data
            ['id' => 5, 'nama' => 'Apple Watch Series 10', 'deskripsi' => 'The thinnest Apple Watch ever, with our biggest display. Featuring a Wide-Angle Always-On OLED Retina display footnote ¹.Get health insights day and night.', 'harga' => 399, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-s10-202409?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1724168059157', 'kategori' => 'watch'],
            ['id' => 6, 'nama' => 'Apple Watch Ultra 2', 'deskripsi' => 'The ultimate sports and adventure watch has a rugged 49mm titanium case with 100-meter water resistance  footnote  § and IP6X dust r.The most accurate GPS in a sports', 'harga' => 799, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-ultra2-202409?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1724168059585', 'kategori' => 'watch'],
            ['id' => 7, 'nama' => 'Apple Watch Hermès Series 10', 'deskripsi' => 'The thinnest Apple Watch ever, with our biggest display. Featuring a Wide-Angle Always-On OLED Retina display footnote ¹', 'harga' => 1249, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-hermes-202503?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1739545414698', 'kategori' => 'watch'],
            ['id' => 8, 'nama' => 'Apple Watch Hermès Ultra 2', 'deskripsi' => 'The ultimate sports and adventure watch has a rugged 49mm natural titanium case with 100-meter water resistance Footnote §', 'harga' => 1399, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-hermes-ultra-202503?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1739545415943', 'kategori' => 'watch'],
            ['id' => 9, 'nama' => 'Apple Watch SE', 'deskripsi' => 'Set up Apple Watch For Your Kids,  footnote  § even if they don’t have their own iPhone Stay active with a range of workout types and motivating metrics', 'harga' => 249, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-se-202503?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1739545408583', 'kategori' => 'watch'],

            //ipad data
            ['id' => 10, 'nama' => 'iPad Pro 11-inch', 'deskripsi' => 'Apple Intelligence helps you write, express yourself, and get things done effortlessly while giving you peace of mind with groundbreaking privacy protections footnote ¹', 'harga' => 999, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-pro-202405?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1713920820026', 'kategori' => 'ipad'],
            ['id' => 11, 'nama' => 'iPad Air 13-inch', 'deskripsi' => 'Apple M3 chip powers Apple Intelligence, incredible performance, and advanced graphics 12MP Center Stage front', 'harga' => 799, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-air-202405?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1713920820139', 'kategori' => 'ipad'],
            ['id' => 12, 'nama' => 'iPad', 'deskripsi' => 'Apple A16 chip delivers superfast All-screen design with 11-inch Liquid Retina display for an amazing viewing experience footnote ¹', 'harga' => 349, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-ipad-202410?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1727714411651', 'kategori' => 'ipad'],
            ['id' => 13, 'nama' => 'iPad Air', 'deskripsi' => 'A17 Pro chip for ultrafast performance and all-day ba calls Compatible with Apple Pencil Pro, Apple Pencil (USB-C), and Smart Folio footnote ⁴', 'harga' => 499, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-ipad-mini-202410?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1727281366305', 'kategori' => 'ipad'],
            // Add other products here...
        ];

        // Cari produk berdasarkan ID yang dikirim
        $produk = null;
        foreach ($produkList as $p) {
            if ($p['id'] == $idProduk) {
                $produk = $p;
                break;
            }
        }

        if (!$produk) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Produk tidak ditemukan']);
        }

        $session = session();
        $keranjang = $session->get('keranjang') ?? [];

        if (isset($keranjang[$idProduk])) {
            $keranjang[$idProduk]['qty'] += 1;
        } else {
            $keranjang[$idProduk] = [
                'id' => $produk['id'],
                'nama' => $produk['nama'],
                'harga' => $produk['harga'],
                'qty' => 1,
                'gambar' => $produk['gambar'] // tambahkan ini
            ];

        }

        $session->set('keranjang', $keranjang);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Berhasil ditambahkan',
            'totalItem' => array_sum(array_column($keranjang, 'qty'))
        ]);
    }

    public function updateKeranjang()
    {
        $request = $this->request->getJSON(true);
        $idProduk = $request['id'] ?? null;
        $action = $request['action'] ?? null;

        $keranjang = session()->get('keranjang') ?? [];

        if (isset($keranjang[$idProduk])) {
            if ($action === 'tambah') {
                $keranjang[$idProduk]['qty'] += 1;
            } elseif ($action === 'kurang') {
                $keranjang[$idProduk]['qty'] -= 1;
                if ($keranjang[$idProduk]['qty'] < 1) {
                    unset($keranjang[$idProduk]); // Hapus item jika qty menjadi 0
                }
            }

            session()->set('keranjang', $keranjang);
            return $this->response->setJSON(['success' => true, 'totalItem' => array_sum(array_column($keranjang, 'qty'))]);
        }

        return $this->response->setJSON(['success' => false, 'message' => 'Produk tidak ditemukan di keranjang.']);
    }

    public function hapusItem()
    {
        $request = $this->request->getJSON(true);
        $idProduk = $request['id'] ?? null;

        $keranjang = session()->get('keranjang') ?? [];

        if (isset($keranjang[$idProduk])) {
            unset($keranjang[$idProduk]);
            session()->set('keranjang', $keranjang);
            return $this->response->setJSON(['success' => true]);
        }

        return $this->response->setJSON(['success' => false, 'message' => 'Item tidak ditemukan di keranjang.']);
    }

    public function keranjang()
    {
        $keranjang = session()->get('keranjang') ?? [];
        return view('keranjang', ['keranjang' => $keranjang]);
    }
}
