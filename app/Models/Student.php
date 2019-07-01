<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Student extends Model
{
    public $timestamps = false;

    public function groups() {
       return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public static function getByGroup($groupId) {
        $student = Student::find(1);
        $s = $student->where('group_id', $groupId)->get();
        return $s;
    }

}
