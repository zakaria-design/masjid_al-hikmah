<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesan extends Model
{
    protected $table = 'pesan';

    use HasFactory;

    protected $fillable = [
        'nama',
        'pesan',
    ];
}
