<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kajian extends Model
{
     protected $table = 'kajian';

     use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
        'jam',
    ];
}
