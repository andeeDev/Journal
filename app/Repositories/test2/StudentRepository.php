<?php


namespace App\Repositories\test2;


interface StudentRepository
{
    public function findAll();
    public function findById($id);
}