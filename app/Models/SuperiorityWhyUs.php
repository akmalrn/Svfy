<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperiorityWhyUs extends Model
{
    use HasFactory;

    protected $table = 'superiority_why_us';

    protected $fillable = [
        'path',
        'superiority',
    ];
}
