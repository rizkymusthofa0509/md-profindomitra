<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'image',
        'author',
        'is_published',
        'published_at',
    ];

    function category()
    {
        return $this->belongsTo(Categories::class,'category_id','id');
    }
}
