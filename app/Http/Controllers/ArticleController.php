<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleCOntroller extends Controller
{
    public function index($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
