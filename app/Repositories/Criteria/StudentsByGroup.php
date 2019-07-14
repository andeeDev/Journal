<?php


namespace App\Repositories\Criteria;


use App\Repositories\Criteria;
use App\Repositories\Repository;

class StudentsByGroup extends Criteria
{
    function apply($model, Repository $repository, $array)
    {
        $query = $model->where('name', '=', 'Тетяна');
        return $query;
    }
}