<?php

namespace App\Controllers;

class KategoriController extends BaseController
{
    public function index()
    {
        return view('kategori');
    }

    public function perKategori($kategori)
    {
        $produkController = new \App\Controllers\ProdukController();
        $produk = $produkController->getProduk();

        $filteredProduk = array_filter($produk, function ($item) use ($kategori) {
            return strtolower($item['kategori']) === strtolower($kategori);
        });

        if (empty($filteredProduk)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('katdetail', [
            'produk' => $filteredProduk,
            'kategori' => strtolower($kategori),
        ]);
    }
}
