<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiBlog extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi_blog';

    protected $fillable = [
        'nav',
        'title',
    ];
}
