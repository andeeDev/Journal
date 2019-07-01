<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clazz extends Model
{
    protected $table = 'classes';
    public $timestamps = false;
//
//    public function post()
//    {
//
//    }

    public function teachers(){
        return $this->belongsTo(Teacher::class, 'tch_id');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'ctg_id');
    }

    public function subjects() {
        return $this->belongsTo(Subject::class, 'sbj_id');
    }

}
