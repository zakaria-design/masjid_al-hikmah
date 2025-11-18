<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesjidController extends Controller
{
    public function dashboard() {
        return view('user.dashboard.index');
    }

    public function kegiatan() {
        return view('user.kegiatan.index');
    }
}
