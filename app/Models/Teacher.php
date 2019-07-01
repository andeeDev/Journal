<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $timestamps = false;

    public function classess()
    {
        return $this->hasMany(Clazz::class, 'tch_id');
    }
}
