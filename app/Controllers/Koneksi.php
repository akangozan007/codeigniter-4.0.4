<?php namespace App\Controllers;

use App\Models\KoneksiModel; // Panggil Model

class Koneksi extends BaseController
{
    public function index()
    {
        $model = new KoneksiModel(); 
        $data['mahasiswa'] = $model->getData(); // Ambil data dari database

        return view('koneksi_view', $data); // Kirim data ke view
    }
}
