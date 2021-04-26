<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryKenaikanGaji extends Model
{
    protected $table = 'history_kenaikan_gaji';
    protected $fillable = [
        'nomor_induk',
        'bulan',
        'tahun',
        'gaji_pokok_lama',
        'persentase_kenaikan',
        'gaji_pokok_baru',
    ];
    use HasFactory;
}
