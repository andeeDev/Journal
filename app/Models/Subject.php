<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = false;

    public function classes() {
        return $this->hasMany(Clazz::class, 'sbj_id');
    }
}
