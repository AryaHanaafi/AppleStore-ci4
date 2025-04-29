<?php

namespace App\Controllers;
class DashboardController extends BaseController
{
    public function kelolaProduk()
    {
        if (session('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses ditolak.');
        }

        return view('dashboard/kelola_produk');
    }

    public function admin()
    {
        if (session('role') !== 'admin') {
            return redirect()->to('/' . session('role'))->with('failed', 'Akses ditolak');
        }

        // Contoh data khusus admin
        $data = [
            'title' => 'Dashboard Admin',
            'totalProduk' => 120,
            'totalPengguna' => 35,
            'transaksiHariIni' => 8,
        ];

        return view('dashboard/admin', $data);
    }

    public function user()
    {
        if (session('role') !== 'user') {
            return redirect()->to('/' . session('role'))->with('failed', 'Akses ditolak');
        }

        // Contoh data khusus user
        $data = [
            'title' => 'Dashboard User',
            'namaUser' => session('username'),
            'produkTersedia' => 50,
            'promoAktif' => 5,
        ];

        return view('dashboard/user', $data);
    }

}