<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offer';

         protected $fillable = [
        'username',
        'email_address',
        'phone_number',
        'subject',
        'description',
    ];
}
