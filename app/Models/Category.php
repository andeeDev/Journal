<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;

    public function classes(){
        return $this->hasMany(Clazz::class, 'ctg_id','id');
    }
}
