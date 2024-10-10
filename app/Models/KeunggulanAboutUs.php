<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeunggulanAboutUs extends Model
{
    use HasFactory;

    protected $table = 'keunggulan_aboutus';

    protected $fillable = [
        'superiority',
    ];
}
