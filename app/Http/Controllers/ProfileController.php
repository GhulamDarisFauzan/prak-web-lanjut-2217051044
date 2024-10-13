<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile($nama = "", $kelas = "", $npm = "")
    
    {
        $data = [
            'nama' => 'Ghulam Daris Fauzan',
            'kelas' => 'C',
            'npm' => '2217051044'
           ];
           

    // return view('profile');
    return view('profile', $data);

    }

    
}
