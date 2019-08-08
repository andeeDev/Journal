<?php


namespace App\Repositories\test2\BaseImplementations;


use App\Models\Point;

class PointsRepositoryImpl
{

    private $model;

    function __construct(Point $point)
    {
        $this->model = $point;
    }

    public function findAll()
    {
        return $this->model::all();
    }


    public function findById($id)
    {
        return $this->model::find($id);
    }
}