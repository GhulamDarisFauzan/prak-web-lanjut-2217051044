<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import User model or UserModel if needed

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        // Assuming 'User' is the correct model, otherwise use UserModel
        return $this->hasMany(User::class, 'kelas_id');
    }

    protected $table = 'kelas';  // Ensure the single quotes are correct and table exists
    
    public function getKelas()
    {
        return $this->all();
    }
}


