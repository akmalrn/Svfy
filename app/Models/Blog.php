<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillable = [
        'path',
        'category_id',
        'title',
        'overview',
        'description',
        'meta_keywords',
        'meta_descriptions',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryService::class, 'category_id');
    }
}
