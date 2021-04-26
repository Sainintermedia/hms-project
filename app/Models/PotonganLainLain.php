<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotonganLainLain extends Model
{
    protected $table = 'potongan_lain_lain';
    protected $fillable = [
        'nomor_induk',
        'bulan',
        'tahun',
        'jumlah',
        'keterangan',
    ];
    use HasFactory;
}
