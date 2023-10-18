<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Utama()
    {
        return view('Welcome');
    }

    public function bio()
    {
        return view('halaman.biodata');
    }

    public function Kirim(Request $request)
    {
        $nama = $request['name'];
        $alamat = $request['alamat'];
        $jeniskelamin = $request['jk'];

        return view('halaman.home', ['nama' => $nama, 'alamat' => $alamat, 'jeniskelamin' => $jeniskelamin]);
    }
}
