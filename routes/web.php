<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//Matkul
Route::get('matkul', [App\Http\Controllers\MatkulController::class, 'index'])->name('matkul')->middleware('auth');
Route::get('matkul-create', [App\Http\Controllers\MatkulController::class, 'add'])->name('tambah_matkul')->middleware('auth');
Route::post('matkul-simpan', [App\Http\Controllers\MatkulController::class, 'save'])->name('simpan_matkul')->middleware('auth');
Route::get('matkul-edit/{id}', [App\Http\Controllers\MatkulController::class, 'edit'])->name('edit_matkul')->middleware('auth');
Route::post('matkul-update/{id}', [App\Http\Controllers\MatkulController::class, 'update'])->name('update_matkul')->middleware('auth');
Route::get('matkul-hapus/{id}', [App\Http\Controllers\MatkulController::class, 'delete'])->name('hapus_matkul')->middleware('auth');

//Mahasiswa
Route::get('mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa')->middleware('auth');
Route::get('mahasiswa-create', [App\Http\Controllers\MahasiswaController::class, 'add'])->name('tambah_mahasiswa')->middleware('auth');
Route::post('mahasiswa-simpan', [App\Http\Controllers\MahasiswaController::class, 'save'])->name('simpan_mahasiswa')->middleware('auth');
Route::get('mahasiswa-edit/{id}', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('edit_mahasiswa')->middleware('auth');
Route::post('mahasiswa-update/{id}', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('update_mahasiswa')->middleware('auth');
Route::get('mahasiswa-hapus/{id}', [App\Http\Controllers\MahasiswaController::class, 'delete'])->name('hapus_mahasiswa')->middleware('auth');

//Nilai
Route::get('nilai', [App\Http\Controllers\NilaiController::class, 'index'])->name('nilai')->middleware('auth');
Route::get('nilai-create', [App\Http\Controllers\NilaiController::class, 'add'])->name('tambah_nilai')->middleware('auth');
Route::post('nilai-simpan', [App\Http\Controllers\NilaiController::class, 'save'])->name('simpan_nilai')->middleware('auth');
Route::get('nilai-edit/{id}', [App\Http\Controllers\NilaiController::class, 'edit'])->name('edit_nilai')->middleware('auth');
Route::post('niali-update/{id}', [App\Http\Controllers\NilaiController::class, 'update'])->name('update_nilai')->middleware('auth');
Route::get('nilai-hapus/{id}', [App\Http\Controllers\NilaiController::class, 'delete'])->name('hapus_nilai')->middleware('auth');


