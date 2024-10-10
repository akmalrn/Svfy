<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    use HasFactory;

    protected $table = 'category_services';

    protected $fillable = [
        'category',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
