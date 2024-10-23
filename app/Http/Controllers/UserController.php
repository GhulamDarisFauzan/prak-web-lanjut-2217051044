<?php

// namespace App\Http\Controllers;


// use App\Models\Kelas;
// use App\Models\UserModel;
// use Illuminate\Http\Request;



// class UserController extends Controller
// {
//     //
//     public function profile($nama = "", $kelas = "", $npm = "")
    
//     {
//         $data = [
//             'nama' => 'Ghulam Daris Fauzan',
//             'kelas' => 'C',
//             'npm' => '2217051044'
//            ];
           

//     // return view('profile');
//     return view('profile', $data);

//     }

//     public function create(){
//         return view('create_user', [
//             'kelas' => Kelas::all(),
//         ]);
//        }



//     public function store(Request $request)
//     {
//         $validatedData = $request->validate([
//         'nama' => 'required|string|max:255',
//         'npm' => 'required|string|max:255',
//         'kelas_id' => 'required|exists:kelas,id',
//     ]);

//     $user = UserModel::create($validatedData);
//     $user->load('kelas');

//         return view('profile', [
//         'nama' => $user->nama,
//         'npm' => $user->npm,
//         'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
//         ]);


        
//     }




namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\Kelas;   
use Illuminate\Http\Request;
use App\Models\ModelLayananRekomendasiUmum;

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

    // public function create(){
    //     $kelasModel = new Kelas();
    //     $kelas = $kelasModel->getKelas();

    //     $data = [
    //         'title' => 'Create User',
    //         'kelas' => $kelas,
    //     ];

    //     return view('create-user', $data);
    // }




    //     public function create(){
    //     return view('create_user', [
    //         'kelas' => Kelas::all(),
    //     ]);
    //    }

       public function create()
       {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
        'kelas' => $kelas,
        ];
        return view('create_user', $data);
       }

       


    public function store(Request $request){
        // $validatedData = $request->validate([
        //     'nama' => 'required|string|max:255',
        //     'npm' => 'required|string|max:255',
        //     'kelas_id' => 'required|exists:kelas,id',
        // ]);

        // $user = UserModel::create($validatedData);
        // $user->load('kelas');
        

        // return view('profile', [
        //     'nama' => $user->nama,
        //     'npm' => $user->npm,
        //     'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        // ]);

        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'ipk' => $request->input('ipk'), 
        ]);

        return redirect()->to('/user');
    }









    

    public function update(Request $request, $id)
{
    // Validate the form input, including IPK
    $request->validate([
        'ipk' => 'nullable|numeric|min:0|max:4',
        // other validation rules...
    ]);

    // Find the user by ID and update the data
    $user = $this->userModel->find($id);
    $user->update([
        'nama' => $request->input('nama'),
        'jurusan' => $request->input('jurusan'),
        'semester' => $request->input('semester'),
        'ipk' => $request->input('ipk'),  // Update IPK in the database
        // other fields...
    ]);

    return redirect()->route('users.index')->with('success', 'User updated successfully!');
}





public function show($id)
{
    $LayananRekomenUmum = ModelLayananRekomendasiUmum::where('encrypted_id', $id)->first();

    $data = [
        'nama_mhs' => auth()->user()->mahasiswa->nama_mahasiswa,
        'ipk' => $LayananRekomenUmum->ipk,
    ];

    return view('layanan_fakultas.akademik.permohonan.rekomendasi_umum.show', $data);
}





}



    





