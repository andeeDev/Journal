<?php


namespace App\Repositories\test2\BaseImplementations;

use App\Models\Group;
use App\Repositories\test2\BaseInterfaces\GroupsInterface;


class GroupsRepositoryImpl implements GroupsInterface
{
    private $model;

    function __construct(Group $group)
    {
        $this->model = $group;
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