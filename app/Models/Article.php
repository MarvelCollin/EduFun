<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['category_id', 'writer_id', 'title', 'content', 'image', 'views'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
}
