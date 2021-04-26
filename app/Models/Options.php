<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = 'options';
    protected $fillable = [
        'persen_pph',
        'ptkp',
        'persen_jamsostek',
        'tunjangan_keluarga'
    ];
    use HasFactory;
}
