<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standar extends Model
{
    protected $table = 'standar';
    protected $fillable = [
        'bulan',
        'tahun',
        'jumlah_hari_kerja'
    ];
    use HasFactory;
}
