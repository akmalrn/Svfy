<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiTeam extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi_team';

    protected $fillable = [
        'nav',
        'title',
        'overview',
    ];
}
