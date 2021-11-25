<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
