<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\petaniController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [landingController::class, 'dashboard'])->name('dashboard');
Route::get('/login', function () {
    return view('landing.login');
})->name('login.petani');

// admin
Route::get('/dashboard admin', [adminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/profil admin', [adminController::class, 'profil'])->name('admin.profil');
Route::get('/tambah petani', [adminController::class, 'tambah'])->name('admin.tambah');
Route::get('/edit petani/{id}', [adminController::class, 'edit'])->name('admin.edit');
Route::put('/updatepetani/{id}', [adminController::class, 'update'])->name('admin.updatepetani');
Route::get('/riwayat', [adminController::class, 'riwayat'])->name('admin.riwayat');
Route::post('/storepetani', [adminController::class, 'storepetani'])->name('admin.storepetani');
Route::delete('/petani/{id}', [adminController::class, 'destroy'])->name('admin.destroypetani');

// petani
Route::get('/dashboard petani', [petaniController::class, 'dashboard'])->name('petani.dashboard');
Route::get('/profil petani', [petaniController::class, 'profil'])->name('petani.profil');
Route::get('/scan', [petaniController::class, 'scan'])->name('petani.scan');
Route::post('/scan/upload', [petaniController::class, 'uploadScan'])
    ->middleware('auth:petani')
    ->name('petani.scan.upload');
Route::get('/riwayat petani', [petaniController::class, 'riwayat'])->name('petani.riwayat');
Route::get('/panduan', [petaniController::class, 'panduan'])->name('petani.panduan');
Route::get('/panduan2', [petaniController::class, 'panduan2'])->name('petani.panduan2');
Route::get('/hasil analisis', [petaniController::class, 'hasilanalisis'])->name('petani.hasilanalisis');
Route::get('/solusi', [petaniController::class, 'solusi'])->name('petani.solusi');

Route::post('/login', [loginController::class, 'login'])->name('login.petani');

