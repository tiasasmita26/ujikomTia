<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FotoController;

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
    return view('layout.main');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/galeri', function () {
    return view('layout.galeri');
});

Route::get('/admin', function () {
    return view('admin.main');
});

Route::get('/Dashboard', function () {
    return view('admin.Dashboard');
});

Route::get('/DataFoto', function () {
    return view('admin.DataFoto');
});

Route::get('/TambahDataFoto', function () {
    return view('admin.TambahDataFoto');
});

Route::get('/DataFoto', [FotoController::class, 'index']);
Route::get('/TambahDataFoto', [FotoController::class, 'create'])->name('TambahDataFoto');  
Route::post('/TambahDataFoto', [FotoController::class, 'store'])->name('simpann');   


Route::get('/Album', [AlbumController::class, 'index'])->name('albumDashboard');
Route::get('/TambahAlbum', [AlbumController::class, 'create']);  
Route::post('/TambahAlbum', [AlbumController::class, 'store'])->name('simpan'); 



require __DIR__.'/auth.php';
