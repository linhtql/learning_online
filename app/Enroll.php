<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $fillable = [
        'id_user',
        'id_course',
        'note'
    ];


    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'id_course');
    }
}
