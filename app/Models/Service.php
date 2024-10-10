<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'path',
        'category_id',
        'title',
        'description',
        'overview',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryService::class, 'category_id');
    }
}
