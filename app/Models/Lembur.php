<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    protected $table = 'lembur';
    protected $fillable = [
        'nomor_induk',
        'bulan',
        'tahun',
        'jumlah_jam_lembur'
    ];
    use HasFactory;
}
