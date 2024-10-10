<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiPricing extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi_pricing';

    protected $fillable = [
        'nav',
        'title',
        'overview',
    ];
}
