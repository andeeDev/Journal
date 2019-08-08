<?php


namespace App\Repositories\test2\BaseInterfaces;


interface StudentRepository
{
    public function findAll();
    public function findById($id);
}