<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{
    use HasFactory;

    protected $table = 'why_us';

    protected $fillable = [
        'nav',
        'title',
        'overview',
        'link_youtube',
        'path',
    ];

}
