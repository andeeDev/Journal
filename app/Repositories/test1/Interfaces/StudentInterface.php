<?php


namespace App\Repositories\Interfaces;


use App\Models\Student;

interface StudentInterface
{
    function getAll();
    function addStudent(Student $student): bool;
    function deleteStudent(Student $student): bool;

}