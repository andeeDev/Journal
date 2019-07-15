<?php


namespace App\Repositories;
use App\Models\Student;
use App\Repositories\Interfaces\StudentInterface;
use Illuminate\Database\Eloquent\Collection;


class StudentsRepository implements StudentInterface {

    protected $studentModel;

    public function __construct(Student $student)
    {
        $this->studentModel = $student;
    }

    function getAll():Collection
    {
        return $this::$studentModel::all();
    }

    function addStudent(Student $student): bool
    {
        try {
            $student->save();
            return true;
        } catch(\Exception $exception)
        {
        return false;
        }
    }

    function deleteStudent(Student $student): bool
    {
        $student->delete();
        return true;
    }
}
