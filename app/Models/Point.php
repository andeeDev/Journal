<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Point extends Pivot
{
    public $timestamps = false;
    public $table = 'points';
    //public $incrementing = true;

    /*const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';*/

    //public $fillable = ['created_at', 'updated_at'];
    //protected $dates = ['created_at', 'updated_at'];
   /* public function students() {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function classes() {
        $this->belongsTo(Clazz::class, 'classes_id');
    }*/

}
