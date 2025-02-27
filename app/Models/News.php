<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_active',
        'heading',
        'body',
        'slug',
        'category_id',
        'image',
    ];

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')->withDefault();
    }
}
