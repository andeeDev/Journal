<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = false;

    public function students() {
        return $this->hasMany(Student::class, 'group_id');
    }

    public function classes(){
        return $this->belongsToMany(
            Clazz::class,
            'class_groups',
            'group_id',
            'class_id');
    }
}
