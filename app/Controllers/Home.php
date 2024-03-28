<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'main' => 'Beranda',
            'title' => 'Beranda',
            'navbar' => 'beranda',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Beranda', $data);

        // return view('index');
    }
    public function Artikel()
    {
        $data = [
            'main' => 'Artikel',
            'title' => 'Artikel',
            'navbar' => 'Artikel',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Artikel', $data);
    }
    public function Tentang()
    {
        $data = [
            'main' => 'Tentang',
            'title' => 'Tentang',
            'navbar' => 'Tentang',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Tentang', $data);
    }
    public function Kontak()
    {
        $data = [
            'main' => 'Kontak',
            'title' => 'Kontak',
            'navbar' => 'Kontak',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Kontak', $data);
    }
    public function faq()
    {
        $data = [
            'main' => 'Frequently Asked Question',
            'title' => 'FAQ',
            'navbar' => 'Kontak',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/FAQ', $data);
    }
    public function Halaman(){
        $data = [
            'main' => 'Halaman',
            'title' => 'Halaman',
            'navbar' => 'kosong',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Halaman', $data);
    }
    public function Visimisi(){
        $data = [
            'main' => 'Visi dan Misi',
            'title' => 'Tentang',
            'navbar' => 'vismis',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Tentang-SPBE/Visimisi', $data);
    }
    public function Tujuan(){
        $data = [
            'main' => 'Tujuan dan Sasaran',
            'title' => 'Tentang',
            'navbar' => 'tujuan',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Tentang-SPBE/Tujuan', $data);
    }
    public function Dokumen(){
        $data = [
            'main' => 'Dokumen',
            'title' => 'Tentang',
            'navbar' => 'dokumen',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Tentang-SPBE/Dokumen', $data);
    }
    public function preview(){
        $data = [
            'main' => 'Preview',
            'title' => 'Tentang',
            'navbar' => 'preview',
            'styles' => 'Navbar',
        ];

        return view('User/Pages/Preview', $data);
    }
    public function Regulasi(){
        $data = [
            'main' => 'Regulasi',
            'title' => 'Tentang',
            'navbar' => 'Regulasi',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Tentang-SPBE/Regulasi', $data);
    }
    public function Indeks(){
        $data = [
            'main' => 'Indeks',
            'title' => 'Tentang',
            'navbar' => 'Indeks',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Tentang-SPBE/Indeks', $data);
    }
    public function Kebijakan(){
        $data = [
            'main' => 'Kebijakan SPBE',
            'title' => 'Tentang',
            'navbar' => 'Kebijakan',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Dokumen-SPBE/Kebijakan', $data);
    }
    public function Tata(){
        $data = [
            'main' => 'Tata Kelola SPBE',
            'title' => 'Tentang',
            'navbar' => 'Tata',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Dokumen-SPBE/Tata-Kelola', $data);
    }
    public function Manajemen(){
        $data = [
            'main' => 'Manajemen SPBE',
            'title' => 'Tentang',
            'navbar' => 'Manajemen',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Dokumen-SPBE/Manajemen', $data);
    }
    public function Layanan(){
        $data = [
            'main' => 'Layanan SPBE',
            'title' => 'Tentang',
            'navbar' => 'Layanan',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Dokumen-SPBE/Layanan', $data);
    }
    public function Arsip(){
        $data = [
            'main' => 'Arsip SPBE',
            'title' => 'Tentang',
            'navbar' => 'Arsip',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Dokumen-SPBE/Arsip', $data);
    }
    public function File(){
        $data = [
            'main' => 'Arsip SPBE',
            'title' => 'Tentang',
            'navbar' => 'Arsip',
            'styles' => 'Navbar',
        ];
        return view('User/Pages/Dokumen-SPBE/Arsip-file', $data);
    }
}
