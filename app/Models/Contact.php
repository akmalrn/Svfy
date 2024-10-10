<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'nav',
        'title',
        'address',
        'telephone',
        'email_address',
        'map',
        'link_youtube',
    ];
}
