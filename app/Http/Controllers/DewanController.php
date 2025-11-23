<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class DewanController extends Controller
{
    public function dewan() {
    $pesan = Pesan::latest()->get(); // urut terbaru

    return view('user.dewan.index', compact('pesan'));
}


     public function storePesan(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'pesan' => 'required|string|max:255'
    ]);


    // Simpan ke database
    Pesan::create([
        'nama' => $request->nama,
        'pesan' => $request->pesan
    ]);

    // Kirim pesan ke session
    session()->flash('success', 'Pesan berhasil dikirim.');

    return redirect()->back();
}


}
