<?php

use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PresensigymController;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\BookingGym;


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
        "title" => "Login"
    ]);
});

Route::get('/blogpage', function(){
    return view('/blog/body', [
        "title" => "Home"           
    ]);
});

Route::get('/about', function(){
    return view('/blog/about/navbar', [
        "title" => "About Us"
    ]);
});


Route::get('/add', function () {
    return view('/pegawai/add/create');
});


Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [PegawaiController::class, 'update'])->name('update');

Route::get('items/create', [PegawaiController::class, 'create'])->name('create');
Route::post('items', [PegawaiController::class, 'store'])->name('store');

// Route::get('/items/create', 'App\Http\Controllers\PegawaiController@create')->name('items.create');
// Route::post('/items', 'App\Http\Controllers\PegawaiController@store')->name('items.store');


// Route::get('/data/create', [PegawaiController::class, 'create'])->name('data.create');

Route::resource('/pegawai', \App\Http\Controllers\PegawaiController::class);
Route::resource('/booking_gym', App\Http\Controllers\PegawaiController::class);



//Route resource
Route::resource('/departemen', \App\Http\Controllers\DepartemenController::class);


Route::resource('/presensi', \App\Http\Controllers\PresensigymController::class);
Route::resource('/member', App\Http\Controllers\MemberController::class);




Route::get('', [PegawaiController::class, 'cancel'])->name('cancel');

Route::delete('/items/{id}', [PegawaiController::class, 'destroy'])->name('items.destroy');












 