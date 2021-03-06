<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'excerpt',
        'description',
        'slug',
        'active'
    ];

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
