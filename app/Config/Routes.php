<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Artikel', 'Home::Artikel');
$routes->get('Tentang','Home::Tentang');
$routes->get('Kontak','Home::Kontak');
$routes->get('Faq','Home::faq');
$routes->get('Halaman','Home::Halaman');
$routes->get('Visimisi','Home::Visimisi');
$routes->get('Tujuan','Home::Tujuan');
$routes->get('Dokumen','Home::Dokumen');
$routes->get('preview','Home::preview');
$routes->get('Regulasi','Home::Regulasi');
$routes->get('Indeks','Home::Indeks');
$routes->get('Kebijakan','Home::Kebijakan');
$routes->get('Tata','Home::Tata');
$routes->get('Manajemen','Home::Manajemen');
$routes->get('Layanan','Home::Layanan');
$routes->get('Arsip','Home::Arsip');
$routes->get('File','Home::File');