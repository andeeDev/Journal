<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'surname', 'group_id'];

    public function groups() {
       return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function classes() {
        return $this->hasMany(Clazz::class)->using(Point::class)->withPivot('point');
    }

    public static function getByGroup($groupId) {
        $student = Student::find(1);
        $s = $student->where('group_id', $groupId)->get();
        return $s;
    }


}
