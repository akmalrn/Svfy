<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeunggulanLayananDetail extends Model
{
    use HasFactory;

    protected $table = 'keunggulan_layanan_detail';

    protected $fillable = [
        'superiority',
    ];
}
