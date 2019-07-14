<?php


namespace App\Repositories;


abstract class Criteria {

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @param $array array contains nesessery data for criteria
     * @return mixed
     */
    public abstract function apply($model, Repository $repository, $array);
}