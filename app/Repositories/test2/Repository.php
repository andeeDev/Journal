<?php


namespace App\Repositories\test2;


use App\Models\Group;
use App\Models\Student;
use App\Repositories\test2\BaseImplementations\GroupsRepositoryImpl;
use App\Repositories\test2\BaseImplementations\StudentRepositoryImpl;
class Repository
{
    private $studentRepo;
    private $classesRepository;
    private $groupsRepository;
    private $pointsRepository;

   public function __construct(StudentRepositoryImpl $repositoryImpl, GroupsRepositoryImpl $groupsRepositoryImpl){
       $this->studentRepo = $repositoryImpl;
       $this->groupsRepository = $groupsRepositoryImpl;
   }

   public function findAllGroupsById($id){
       return Group::find($id);
       //return $this->groupsRepository->findById($id);
   }

    public function findAllStudentsById($id)
    {
        return Student::find($id);
    }


}