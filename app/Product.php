<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'size', 'image', 'category_id'];
    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
