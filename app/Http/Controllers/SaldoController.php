<?php

namespace App\Http\Controllers;

use App\Models\Saldo;

class SaldoController extends Controller
{
    public function saldo()
{
    // Ambil saldo terbaru langsung (tanpa syarat)
    $saldo = Saldo::orderBy('id', 'desc')->value('saldo');

    // Ambil total uang keluar terakhir yang nilainya != 0
    $uangKeluar = Saldo::where('total_uang_keluar', '>', 0)
        ->orderBy('id', 'desc')
        ->value('total_uang_keluar');

    // Ambil total uang masuk terakhir yang nilainya != 0
    $uangMasuk = Saldo::where('total_uang_masuk', '>', 0)
        ->orderBy('id', 'desc')
        ->value('total_uang_masuk');

    // 🔥 Ambil semua nama pengeluaran terbaru
    $pengeluaran = Saldo::whereNotNull('nama_pengeluaran')
        ->orderBy('id', 'desc')
        ->pluck('nama_pengeluaran');

        // 🔥 Ambil semua nama pemasukan terbaru
    $pemasukan = Saldo::whereNotNull('nama_donasi')
        ->orderBy('id', 'desc')
        ->pluck('nama_donasi');

    return view('user.saldo.index', compact('saldo', 'uangKeluar', 'uangMasuk', 'pengeluaran','pemasukan'));
}

}
