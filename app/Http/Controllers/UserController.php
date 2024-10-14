<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => 'Ghulam Daris Fauzan',
            'kelas' => 'C',
            'npm' => '2217051044'
        ];

        return view('profile', $data);
    }

    public function create(){
        return view('create_user');
       }

       public function store(Request $request)
       {

        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'npm' => $request->input('npm'),
           ];
            
           return view('profile', $data);
    
       }
       
}
