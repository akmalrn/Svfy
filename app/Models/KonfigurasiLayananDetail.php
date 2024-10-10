<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiLayananDetail extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi_layanan_detail';

    protected $fillable = [
        'nav',
        'title_feature',
    ];
}
