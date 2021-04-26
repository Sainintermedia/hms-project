<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $fillable = [
        'kode_jabatan',
        'nama_jabatan',
        'tunjangan_jabatan',
        'level_jabatan'
    ];
    use HasFactory;
}
