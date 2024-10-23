<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'npm' => '123456789',
            'foto' => 'path_to_image.jpg', // Ganti dengan path gambar yang sesuai
            'kelas' => '10A',
            'jurusan' => 'Teknik Informatika',
            'semester' => 2,
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
        User::create([
            'name' => 'Jane Smith',
            'npm' => '987654321',
            'foto' => 'path_to_image2.jpg', // Ganti dengan path gambar yang sesuai
            'kelas' => '10B',
            'jurusan' => 'Sistem Informasi',
            'semester' => 1,
        ]);
        
        // Tambahkan data lainnya jika perlu
    }
}
