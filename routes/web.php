<?php

use App\Http\Controllers\ReferensiController;
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