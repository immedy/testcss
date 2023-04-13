<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\UserNameController;
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

Route::get('/login', function () {
    return view('Layout.login');
});


Route::controller(ReferensiController::class)->group(function () {
    route::get('/referensi','index');
    route::post('/tambah','SimpanReferensi');
    route::post('/tambahkategori','SimpanJenisReferensi');
});

Route::controller(PegawaiController::class)->group(function () {
    route::get('/pegawai','index');
    route::get('/pegawai/{id}','TampilPegawai');
    route::post('/addpegawai','TambahPegawai');
});

Route::controller(UserNameController::class)->group(function () {
    route::post('/addusername','index');
    
});

