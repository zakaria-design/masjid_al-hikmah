<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MesjidController;

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
});

// rute halaman user
Route::get('/kas/mesjid/dashboard',[MesjidController::class, 'dashboard'])->name('dashboard.mesjid');
Route::get('/kas/mesjid/kegiatan',[MesjidController::class, 'kegiatan'])->name('kegiatan.mesjid');
