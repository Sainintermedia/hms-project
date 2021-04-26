<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = [
        'nomor_induk',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'status_pernikahan',
        'jumlah_anak',
        'alamat',
        'nomor_telepon',
        'pendidikan_terakhir',
        'kode_jabatan',
        'kode_cabang',
        'kode_departemen',
        'gaji_pokok',
        'tanggal_diangkat',
        'tanggal_keluar',
        'nama_bank',
        'nomor_rekening',
        'rekening_atas_nama',
    ];
    use HasFactory;
}
