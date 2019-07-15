<?php


namespace App\Repositories\test2;

use \App\Repositories\test2\BaseInterfaces\StudentRepository;
use App\Models\Student;

class StudentRepositoryImpl implements StudentRepository
{
    public function findById($id){
        Student::find($id);
    }

    public function findAll(){
        Student::all();
    }

}