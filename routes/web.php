<?php

use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PresensigymController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', function () {
    return view('pegawai/dashboard', [
        "title" => "Admin"
    ]);
    
});

Route::get('/kasir', function() {
    return view('/kasir/dashboard', [
        "title" => "Kasir"
    ]);
});

Route::get('/register', function() {
    return view('/register/registrationPage', [
        "title" => "Register"
    ]);
});

Route::get('/loginpage', function() {
    return view('/login/loginpage', [
        "title" => "dog"
    ]);
});

Route::post('', [LoginController::class, 'logout'])->name('logout');


//Route resource
Route::resource('/departemen', \App\Http\Controllers\DepartemenController::class);
Route::resource('/pegawai', \App\Http\Controllers\PegawaiController::class);
Route::resource('/presensi', \App\Http\Controllers\PresensigymController::class);
Route::resource('/member', App\Http\Controllers\MemberController::class);


Route::delete('/items/{id}', [PegawaiController::class, 'destroy'])->name('items.destroy');





 