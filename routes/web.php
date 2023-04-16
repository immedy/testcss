<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\UserNameController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Dashboard.index');
});
Route::get('/landing', function () {
    return view('Layout.landingpage');
});
Route::get('/editor', function () {
    return view('Dashboard.Detail.MenuUtama');
});







route::post('/autentikasi',[UserNameController::class,'login']);
route::get('/login',[UserNameController::class,'HalamanLogin'])->name('login');

Route::controller(UserNameController::class)->group(function () {
    route::post('/addusername','index');
    route::post('/logout','logout');
    route::get('/ManajemenPengguna','ManajemenPengguna');
});
Route::controller(PegawaiController::class)->group(function () {
    route::get('/pegawai','index');
    route::get('/pegawai/{id}/edit','TampilPegawai');
    route::post('/addpegawai','TambahPegawai');

});

Route::controller(ReferensiController::class)->group(function () {
    route::get('/referensi','index');
    route::post('/tambah','SimpanReferensi');
    route::post('/tambahkategori','SimpanJenisReferensi');

});