<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $currentTime = date("H:i:s");
        return view('dashboard.main', ['currentTime' => $currentTime]);
    }

    public function izin()
    {
        return view('dashboard.izin');
    }

    public function absen()
    {
        $email = Session('email');
        $data = [
            'status' => 1,
            'email' => $email,
        ];
        Absen::create($data);
        return redirect()->back()->with('success', 'Berhasil Melakukan Absensi');
    }
}
