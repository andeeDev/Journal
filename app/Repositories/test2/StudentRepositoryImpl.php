<?php


namespace App\Repositories\test2;

use \App\Repositories\test2\StudentRepository;
use App\Models\Student;

class StudentRepositoryImpl implements StudentRepository
{
    function findById($id){
        Student::find($id);
    }

    function findAll(){
        Student::all();
    }

}