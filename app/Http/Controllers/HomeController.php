<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Sesuaikan dengan nama view yang Anda gunakan untuk halaman beranda
    }
}
