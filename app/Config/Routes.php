<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Cari dan pastikan barisnya seperti ini:
$routes->get('login', 'AuthController::login'); 
$routes->post('login', 'AuthController::loginPost'); 
$routes->get('logout', 'AuthController::logout');
$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::registerPost');
$routes->group('admin', function ($routes) {
    // Dashboard

    $routes->get('dashboard', 'AdminController::dashboard');

    // Profil HMTI
    $routes->get('profil', 'Admin\ProfilController::index');
    $routes->get('profil/add', 'Admin\ProfilController::add');
    $routes->post('profil/add', 'Admin\ProfilController::store');
    $routes->get('profil/edit/(:num)', 'Admin\ProfilController::edit/$1');
    $routes->post('profil/edit/(:num)', 'Admin\ProfilController::update/$1');
    $routes->get('profil/delete/(:num)', 'Admin\ProfilController::delete/$1');
});

$routes->group('admin', function ($routes) {
    // Struktur Pengurus
    $routes->get('struktur', 'Admin\StrukturPengurusController::index');
    $routes->get('struktur/add', 'Admin\StrukturPengurusController::add');
    $routes->post('struktur/add', 'Admin\StrukturPengurusController::store');
    $routes->get('struktur/edit/(:num)', 'Admin\StrukturPengurusController::edit/$1');
    $routes->post('struktur/edit/(:num)', 'Admin\StrukturPengurusController::update/$1');
    $routes->post('struktur/update/(:num)', 'Admin\StrukturPengurusController::update/$1');
    $routes->get('struktur/delete/(:num)', 'Admin\StrukturPengurusController::delete/$1');
    $routes->post('struktur/store', 'Admin\StrukturPengurusController::store');
});

$routes->group('admin', function ($routes) {
    $routes->get('visimisi', 'Admin\VisimisiController::index');
    $routes->get('visimisi/add', 'Admin\VisimisiController::add');
    $routes->post('visimisi/add', 'Admin\VisimisiController::store');
    $routes->get('visimisi/edit/(:num)', 'Admin\VisimisiController::edit/$1');
    $routes->post('visimisi/edit/(:num)', 'Admin\VisimisiController::update/$1');
    $routes->get('visimisi/delete/(:num)', 'Admin\VisimisiController::delete/$1');
});

$routes->group('admin', function ($routes) {
    // Sejarah
    $routes->get('sejarah', 'Admin\SejarahController::index');
    $routes->get('sejarah/add', 'Admin\SejarahController::add');
    $routes->post('sejarah/add', 'Admin\SejarahController::store');
    $routes->get('sejarah/edit/(:num)', 'Admin\SejarahController::edit/$1');
    $routes->post('sejarah/edit/(:num)', 'Admin\SejarahController::update/$1');
    $routes->get('sejarah/delete/(:num)', 'Admin\SejarahController::delete/$1');
});

$routes->group('admin', function ($routes) {
    $routes->get('proker', 'Admin\ProkerController::index');
    $routes->get('proker/add', 'Admin\ProkerController::add');
    $routes->post('proker/add', 'Admin\ProkerController::store');
    $routes->get('proker/edit/(:num)', 'Admin\ProkerController::edit/$1');
    $routes->post('proker/edit/(:num)', 'Admin\ProkerController::update/$1');
    $routes->get('proker/delete/(:num)', 'Admin\ProkerController::delete/$1');
});

$routes->group('admin', function ($routes) {
    $routes->get('artikel', 'Admin\ArtikelController::index');
    $routes->get('artikel/add', 'Admin\ArtikelController::add');
    $routes->post('artikel/store', 'Admin\ArtikelController::store');
    $routes->get('artikel/edit/(:num)', 'Admin\ArtikelController::edit/$1');
    $routes->post('artikel/update/(:num)', 'Admin\ArtikelController::update/$1');
    $routes->get('artikel/delete/(:num)', 'Admin\ArtikelController::delete/$1');
});

$routes->group('admin', function ($routes) {
    $routes->get('forumsaran', 'Admin\ForumSaranController::index');
    $routes->get('forumsaran/add', 'Admin\ForumSaranController::add');
    $routes->post('forumsaran/add', 'Admin\ForumSaranController::store');
    $routes->get('forumsaran/edit/(:num)', 'Admin\ForumSaranController::edit/$1');
    $routes->post('forumsaran/edit/(:num)', 'Admin\ForumSaranController::update/$1');
    $routes->get('forumsaran/delete/(:num)', 'Admin\ForumSaranController::delete/$1');
});

$routes->group('admin', function ($routes) {
    // Dokumen
    $routes->get('dokumen', 'Admin\DokumenController::index');
    $routes->get('dokumen/add', 'Admin\DokumenController::add');
    $routes->post('dokumen/store', 'Admin\DokumenController::store');
    $routes->get('dokumen/edit/(:num)', 'Admin\DokumenController::edit/$1');
    $routes->post('dokumen/update/(:num)', 'Admin\DokumenController::update/$1');
    $routes->get('dokumen/delete/(:num)', 'Admin\DokumenController::delete/$1');
});
$routes->group('admin', function ($routes) {
    $routes->get('admin', 'Admin\AdminController::index');
    $routes->get('admin/add', 'Admin\AdminController::add');
    $routes->post('admin/add', 'Admin\AdminController::store');
    $routes->get('admin/edit/(:num)', 'Admin\AdminController::edit/$1');
    $routes->post('admin/edit/(:num)', 'Admin\AdminController::update/$1');
    $routes->get('admin/delete/(:num)', 'Admin\AdminController::delete/$1');
});

$routes->group('beranda', function ($routes) {
    $routes->get('profil', 'Beranda\ProfilController::index');
    $routes->get('visimisi', 'Beranda\VisimisiController::index');
    $routes->get('struktur_pengurus', 'Beranda\StrukturPengurusController::index');
    $routes->get('sejarah', 'Beranda\SejarahController::index');
    $routes->get('dokumen', 'Beranda\DokumenController::index');
    $routes->get('proker', 'Beranda\ProkerController::index');
    $routes->get('proker/(:num)', 'Beranda\ProkerController::detail/$1');
    $routes->get('artikel', 'Beranda\ArtikelController::index');
    $routes->get('artikel/(:num)', 'Beranda\ArtikelController::detail/$1');
});
