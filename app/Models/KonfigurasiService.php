<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiService extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi_service';

    protected $fillable = [
        'nav',
        'title',
        'description',
    ];
}
