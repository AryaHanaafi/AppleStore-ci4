<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $produk = [
            //iphone data
            ['id' => 1, 'nama' => 'iPhone 16 Pro', 'deskripsi' => 'A18 Pro chip powers Apple Intelligence footnote 3 and AAA gaming — and helps deliver a huge leap in battery life. Best Iphone', 'harga' => 999, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone16pro-digitalmat-gallery-3-202409?wid=728&hei=666&fmt=p-jpg&qlt=95&.v=1723843057832', 'kategori' => 'iphone'],
            //apple watch data
            ['id' => 5, 'nama' => 'Apple Watch Series 10', 'deskripsi' => 'The thinnest Apple Watch ever, with our biggest display. Featuring a Wide-Angle Always-On OLED Retina display footnote ¹.Get health insights day and night.', 'harga' => 399, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/watch-card-40-s10-202409?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1724168059157', 'kategori' => 'watch'],
            //ipad data
            ['id' => 10, 'nama' => 'iPad Pro 11-inch', 'deskripsi' => 'Apple Intelligence helps you write, express yourself, and get things done effortlessly while giving you peace of mind with groundbreaking privacy protections footnote ¹', 'harga' => 999, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-pro-202405?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1713920820026', 'kategori' => 'ipad'],
            ['id' => 11, 'nama' => 'iPad Air 13-inch', 'deskripsi' => 'Apple M3 chip powers Apple Intelligence, incredible performance, and advanced graphics 12MP Center Stage front', 'harga' => 799, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-air-202405?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1713920820139', 'kategori' => 'ipad'],
            ['id' => 12, 'nama' => 'iPad', 'deskripsi' => 'Apple A16 chip delivers superfast All-screen design with 11-inch Liquid Retina display for an amazing viewing experience footnote ¹', 'harga' => 349, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-ipad-202410?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1727714411651', 'kategori' => 'ipad'],
            ['id' => 13, 'nama' => 'iPad Air', 'deskripsi' => 'A17 Pro chip for ultrafast performance and all-day ba calls Compatible with Apple Pencil Pro, Apple Pencil (USB-C), and Smart Folio footnote ⁴', 'harga' => 499, 'gambar' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-card-40-ipad-mini-202410?wid=680&hei=528&fmt=p-jpg&qlt=95&.v=1727281366305', 'kategori' => 'ipad'],
        ];

        return view('home', ['produk' => $produk]);
    }


}

