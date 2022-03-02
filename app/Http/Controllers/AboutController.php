<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return "
        NIM     : 2041720076<br>
        Nama    : Muhammad Reza Khatami<br>
        Kelas   : TI - 2C";
    }
}
