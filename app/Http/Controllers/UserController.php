<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\Kelas;   
use Illuminate\Http\Request;
use App\Models\User;  

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];  

        return view('list_user', $data);
    }

    public function profile($nama = "", $kelas = "", $npm = ""){
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }

    public function create(){
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    public function store(Request $request){
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }

    // Fungsi Edit
    public function edit($id){
        $user = $this->userModel->find($id); // Ambil data user berdasarkan ID
        $kelas = $this->kelasModel->getKelas();

        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User tidak ditemukan!');
        }

        return view('edit_user', compact('user', 'kelas'));
    }

    // Fungsi Update
    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $user = $this->userModel->find($id);

        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'Data user berhasil diupdate!');
    }

    // Fungsi Delete
    public function destroy($id){
        $user = $this->userModel->find($id);

        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User tidak ditemukan!');
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Data user berhasil dihapus!');
    }
}
