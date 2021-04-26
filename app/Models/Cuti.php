<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cuti';
    protected $fillable = [
        'nomor_induk',
        'bulan',
        'tahun',
        'jumlah_cuti'
    ];
    use HasFactory;
}
