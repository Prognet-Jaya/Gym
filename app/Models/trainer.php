<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
    use HasFactory;
    protected $table = 'trainer';

    protected $fillable = [
        'Nama_trainer',
        'Umur_trainer',
        'jk',
        'jenis_trainer',
        'telepon',
        'alamat',
    ];


}
