<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiFaq extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi_faq';

    protected $fillable = [
        'nav',
        'title',
        'overview',
        'title_include',
        'include',
        'title_include2',
        'include2',
        'title_include3',
        'include3',
        'title_include4',
        'include4',
        'path',
    ];
}
