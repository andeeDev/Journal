<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    public $timestamps = false;

    public function students() {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function classes() {
        $this->belongsTo(Clazz::class, 'classes_id');
    }

}
