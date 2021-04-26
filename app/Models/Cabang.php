<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $table='cabang';
    protected $fillable=[
        'kode_cabang',
        'nama_cabang',
        'uang_makan',
    ];
    use HasFactory;
}
