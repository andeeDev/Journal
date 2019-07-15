<?php


namespace App\Repositories\test2\BaseImplementations;

use App\Models\Group;
use App\Repositories\test2\BaseInterfaces\GroupsInterface;


class GroupsRepositoryImpl implements GroupsInterface
{
    public function findAll()
    {
       return Group::all();
    }


    public function findById($id)
    {
        return Group::find($id);
    }
}