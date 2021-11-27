<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'id_category',
        'excerpt',
        'description',
        'thumb',
        'price',
        'price_sale',
        'active'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
