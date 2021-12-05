<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id_user',
        'course_name',
        'thumb',
        'note'
    ];

    public function user()
    {
        return $this->hasOne(Enroll::class, 'id', 'id_user');
    }
}
