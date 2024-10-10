<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'aboutus';

    protected $fillable = [
        'nav',
        'path',
        'title',
        'overview',
        'description',
        'title_include',
        'include',
        'title_include2',
        'include2',
        'title_include3',
        'include3',
    ];
}
