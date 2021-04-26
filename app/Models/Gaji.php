<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $table = 'gaji';
    protected $fillable = [
            'nomor_induk',
            'bulan',
            'tahun',
            'gaji_pokok',
            'tunjangan_jabatan',
            'tunjangan_keluarga',
            'uang_makan',
            'uang_lembur',
            'persen_pot_pph',
            'ptkp',
            'persen_pot_jamsostek',
            'pot_lain_lain',
            'nama_jabatan',
            'nama_cabang',
            'nama_departemen',
            'nama_bank',
            'nomor_rekening',
            'rekening_atas_nama'
    ];
    use HasFactory;
}
