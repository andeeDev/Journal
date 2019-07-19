<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'surname', 'group_id'];

    protected $with = ['classes'];

    public function groups() {
       return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    /*public function classes() {
        return $this->belongsToMany(Clazz::class, 'points', 'classes_id', 'student_id')->using(Point::class)->withPivot('point');
    }*/

    public function points(){
        return $this->hasMany(Point::class,'student_id', 'id');
    }

    public function classes(){
        return $this->belongsToMany(Clazz::class, Point::class, 'classes_id', 'student_id');
    }

    public static function getByGroup($groupId) {
        $student = Student::find(1);
        $s = $student->where('group_id', $groupId)->get();
        return $s;
    }


}
