<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Point extends Pivot
{
    public $table = 'points';

    public function students() {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function classes() {
        $this->belongsTo(Clazz::class, 'classes_id');
    }

}
