<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team';

    protected $fillable = [
        'path',
        'username',
        'position',
        'phone_number',
        'address',
        'email_address',
        'link_facebook',
        'link_twitter',
        'link_instagram',
        'link_linkedin',
        'description',
    ];
}
