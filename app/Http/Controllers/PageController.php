<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Hi! Selamat datang di Website Laravel";
    }

    public function about()
    {
        return "
        NIM     : 2041720076<br>
        Nama    : Muhammad Reza Khatami<br>
        Kelas   : TI - 2C";
    }

    public function articles($id)
    {
        return "Ini adalah halaman artikel dengan ID ".$id;
    }
}
