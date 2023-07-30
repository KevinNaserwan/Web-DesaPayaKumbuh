<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        return view('statistik.main');
    }

    public function ubah()
    {
        return view('statistik.ubah');
    }
}
