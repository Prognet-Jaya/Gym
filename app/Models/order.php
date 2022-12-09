<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'tb_order';

    protected $fillable = [
        'tanggal_order',
        'jumlah_bayar',
        'id_user',
        'id_training',
    ];
}
