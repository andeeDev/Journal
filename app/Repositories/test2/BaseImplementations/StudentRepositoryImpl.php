<?php


namespace App\Repositories\test2\BaseImplementations;

use \App\Repositories\test2\BaseInterfaces\StudentRepository;
use App\Models\Student;

class StudentRepositoryImpl implements StudentRepository
{
    private $model;

    function __construct(Student $student) {
        $this->model = $student;
    }

    public function findById($id){
        $this->model::find($id);
    }

    public function findAll(){
        $this->model::all();
    }

    public function getStudentsWithMarks($id_group){
        return $this->model::with('classes')->where('group_id', '=', $id_group)->get();
        //return $this->model::with('points', 'classes' )->where('group_id', '=', $id_group)->get();
        //return $this->studentRepo->getStudentsByGroupId($id);
    }


    public function getStudentsByGroupId($id)
    {
        return $this->model->all()->where('group_id', '=', $id);
    }

}