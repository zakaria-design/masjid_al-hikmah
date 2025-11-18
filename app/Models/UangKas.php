<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UangKas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pengeluaran', 
        'jenis_pengeluaran', 
        'uang_keluar',
        'total_uang_keluar',
        'nama_donasi', 
        'uang_masuk',
        'total_uang_masuk', 
        'saldo', 
    ];
}
