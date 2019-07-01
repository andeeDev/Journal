<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //all relations has been set

    //protected $table = 'groups';
    //
    public $timestamps = false;

    public function groups(){
        return $this->hasMany(Student::class);
    }

    public function classes(){
        //may cause wrong work
        return $this->belongsToMany(Clazz::class, 'class_id');
    }
}
