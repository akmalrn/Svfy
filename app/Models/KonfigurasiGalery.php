<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiGalery extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi_galery';

    protected $fillable = [
        'nav',
        'title',
    ];
}
