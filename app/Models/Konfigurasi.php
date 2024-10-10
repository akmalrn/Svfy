<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi';

    protected $fillable = [
        'logo',
        'name_website',
        'logo_title',
        'nama_title',
        'aside',
        'aside2',
        'nama_instagram',
        'link_instagram',
        'nama_facebook',
        'link_facebook',
        'nama_twitter',
        'link_twitter',
        'nama_linkedin',
        'link_linkedin',
        'alamat',
        'description_footer',
        'footer',
        'timetable',
    ];
}
