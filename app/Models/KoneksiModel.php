<?php namespace App\Models;

use CodeIgniter\Model;

class KoneksiModel extends Model
{
    protected $table = 'mahasiswa'; // Nama tabel di database

    public function getData()
    {
        return $this->findAll(); // Mengambil semua data dari tabel
    }
}
