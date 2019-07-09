<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clazz extends Model
{
    protected $table = 'classes';
    public $timestamps = false;

    public function teachers(){
        return $this->belongsTo(Teacher::class, 'tch_id');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'ctg_id');
    }

    public function subjects() {
        return $this->belongsTo(Subject::class, 'sbj_id');
    }

    public function groups() {
        return $this->belongsToMany(Group::class, 'class_groups', 'group_id',
            'class_id');

    }

    public function points() {
        return $this->hasMany(Point::class, 'classes_id');
    }

}
