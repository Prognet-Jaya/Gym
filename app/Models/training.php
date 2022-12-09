<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    use HasFactory;
    protected $table = 'training';

    protected $fillable = [
        
        'nama_training',
        'harga_training',
        'slot',
        'gambar',
    ];

   
}
