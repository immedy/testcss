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
})->middleware(['auth']);
Route::get('/landing', function () {
    return view('Layout.landingpage');
});
Route::get('/editor', function () {
    return view('Dashboard.Detail.MenuUtama');
});

route::post('/autentikasi',[UserNameController::class,'login']);
route::get('/login',[UserNameController::class,'HalamanLogin'])->name('login')->middleware('guest');

Route::controller(UserNameController::class)->group(function () {
    route::put('/addusername/{id}','index')->middleware('auth','admin');
    route::post('/logout','logout')->middleware('auth');
    route::get('/ManajemenPengguna','ManajemenPengguna')->middleware('auth','admin');
    route::get('/ManajemenPengguna/{id}','CariUsername')->middleware('auth','admin')->name('DetailIdUsername');
    route::put('/ManajemenPengguna','EditUsername')->middleware('auth','admin')->name('EditUsername');
});
Route::controller(PegawaiController::class)->group(function () {
    route::get('/pegawai','index')->middleware('auth','admin');
    route::get('/pegawai/{id}/edit','TampilPegawai')->middleware('auth','admin');
    route::post('/addpegawai','TambahPegawai')->middleware('auth','admin')->name('addpegawai');

});

Route::controller(ReferensiController::class)->group(function () {
    route::get('/referensi','index')->middleware('auth','admin');
    route::post('/tambah','SimpanReferensi')->middleware('auth','admin');
    route::post('/tambahkategori','SimpanJenisReferensi')->middleware('auth','admin');
    route::get('/password','password');

});