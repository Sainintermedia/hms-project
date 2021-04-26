<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = "users";
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];
    use HasFactory;
}
