<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelLayananRekomendasiUmum extends Model
{
    // Jika model berhubungan dengan tabel tertentu
    protected $table = 'layanan_rekomendasi_umum'; // Ganti dengan nama tabel yang sesuai

    // Tentukan field yang dapat diisi secara massal
    protected $fillable = [
        'encrypted_id',
        'ipk',
        'kebutuhan_rekomen',
        // tambahkan field lainnya yang diperlukan
    ];
}

