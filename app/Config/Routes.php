<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AuthController::login', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/admin', 'DashboardController::admin', ['filter' => 'role:admin']);
$routes->get('/user', 'DashboardController::user', ['filter' => 'role:user']);

$routes->get('/home', 'Home::index');


$routes->get('/produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->get('kategori', 'KategoriController::index');
$routes->get('kategori/(:segment)', 'KategoriController::perKategori/$1');

$routes->get('keranjang', 'TransaksiController::keranjang');
$routes->post('transaksi/tambah-ke-keranjang', 'TransaksiController::tambahKeKeranjang');
$routes->post('transaksi/update-keranjang', 'TransaksiController::updateKeranjang');
$routes->post('transaksi/hapusItem', 'TransaksiController::hapusItem');

$routes->get('/kelola-produk', 'DashboardController::kelolaProduk', ['filter' => 'role:admin']);




