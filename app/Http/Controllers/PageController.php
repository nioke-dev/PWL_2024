<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Nama Saya Muhammad Nurul Mustofa dan NIM Saya 2241720022';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
