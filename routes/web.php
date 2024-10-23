<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; // Tambahkan baris ini untuk mengimpor ProfileController
use App\Http\Controllers\UserController; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/profile', [ProfileController::class, 'profile']);


Route::get('/profile/{nama}/{kelas}/{npm}',
[ProfileController::class, 'profile']);

Route::post('/user/store', [UserController::class,'store'])->name('user.store');

Route::get('/user/create', [UserController::class,'create']);
Route::get('/user/create', [UserController::class, 'create'])->name('create_user');


Route::get('/user/profile', [UserController::class,'profile']);

Route::post('/user/store', [UserController::class,'store'])->name('user.store');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index');






Route::get('/user/create', [UserController::class, 'create'])->name('create_user');
