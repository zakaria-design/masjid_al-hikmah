<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DewanController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\MesjidController;
use App\Http\Controllers\KegiatanController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('admin.dashboard.index');
    }
    return redirect()->route('login');
});


// rute superadmin
// Route::view('superadmin/user/index','superadmin.user.index')->name('superadmin.user.index');


// contoh memanggil middle =ware alias
// Route::resource('users', UserController::class)->middleware('isSuperAdmin');


// Login routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Super Admin routes
Route::middleware(['auth'])->group(function () {
    Route::view('/admin/dashboard/index', 'admin.dashboard.index')->name('admin.dashboard.index');
    Route::view('/admin/keuangan/index', 'admin.keuangan.index')->name('admin.keuangan.index');
    Route::view('/admin/pengeluaran/index', 'admin.pengeluaran.index')->name('admin.pengeluaran.index');
    Route::view('/admin/activitas/index', 'admin.activitas.index')->name('admin.activitas.index');
});

// rute halaman user
// Home
Route::get('/kas/mesjid/dashboard',[HomeController::class, 'dashboard'])->name('dashboard.mesjid');
Route::post('/kirim-bukti', [HomeController::class, 'storeBukti'])->name('kirim.bukti');

//kegiatan
Route::get('/kas/mesjid/kegiatan',[KegiatanController::class, 'kegiatan'])->name('kegiatan.mesjid');

// dewan
Route::get('/kas/mesjid/dewan',[DewanController::class, 'dewan'])->name('dewan.mesjid');
Route::post('/kirim-pesan', [DewanController::class, 'storePesan'])->name('kirim.pesan');

// informasi saldo
Route::get('/kas/mesjid/saldo',[SaldoController::class, 'saldo'])->name('saldo.mesjid');
