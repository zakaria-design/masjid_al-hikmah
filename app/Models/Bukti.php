<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bukti extends Model
{
    protected $table = 'bukti';

     use HasFactory;

    protected $fillable = [
        'nama',
        'foto',
    ];
}
