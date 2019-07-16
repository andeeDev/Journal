<?php


namespace App\Repositories\test2\BaseImplementations;

use App\Models\Clazz;

class ClassesRepositoryImpl
{
    private $model;

    function __construct(Clazz $class)
    {
        $this->model = $class;
    }

    public function findAll()
    {
        return $this->model::all();
    }


    public function findById($id)
    {
        return $this->model::find($id);
    }

    public function findClassesWhere($categ_sbj, $id_sbj, $tch_id){
        return $this->model->where([
            ['ctg_id', '=', $categ_sbj],
            ['sbj_id','=', $id_sbj ],
            ['tch_id', '=', $tch_id]
        ])->get();
    }
}