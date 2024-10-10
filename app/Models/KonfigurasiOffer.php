<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiOffer extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi_offer';

    protected $fillable = [
        'path',
        'nav',
        'title',
        'title_include',
        'include',
        'title_include2',
        'include2',
        'title_include3',
        'include3',
        'title_include4',
        'include4',
    ];
}
