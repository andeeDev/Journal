<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    public function groups() {
        $this->belongsTo(Group::class);
    }

    public static function getByGroup($groupId) {

    }
    //
}
