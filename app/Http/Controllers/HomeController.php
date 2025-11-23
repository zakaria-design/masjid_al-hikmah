<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Models\Bukti; // pastikan Model ada

class HomeController extends Controller
{
    // public function dashboard() {
    //     return view('user.dashboard.index');
    // }

    public function dashboard() {
    $pesan = Pesan::latest()->get(); // urut terbaru

    return view('user.dashboard.index', compact('pesan'));
}

    public function storeBukti(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'foto' => 'required|image|max:2048'
    ]);

    // Upload bukti transfer
    $filePath = $request->file('foto')->store('bukti', 'public');

    // Simpan ke database
    Bukti::create([
        'nama' => $request->nama,
        'foto' => $filePath
    ]);

    // Kirim pesan ke session
    session()->flash('success', 'Bukti transfer berhasil dikirim.');

    return redirect()->back();
}

}
