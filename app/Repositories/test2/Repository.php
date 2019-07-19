<?php


namespace App\Repositories\test2;


use App\Models\Group;
use App\Models\Student;
use App\Repositories\test2\BaseImplementations\ClassesRepositoryImpl;
use App\Repositories\test2\BaseImplementations\GroupsRepositoryImpl;
use App\Repositories\test2\BaseImplementations\PointsRepositoryImpl;
use App\Repositories\test2\BaseImplementations\StudentRepositoryImpl;
class Repository
{
    private $studentRepo;
    private $classesRepository;
    private $groupsRepository;
    private $pointsRepository;


   public function __construct(StudentRepositoryImpl $repositoryImpl, GroupsRepositoryImpl $groupsRepositoryImpl,
                                ClassesRepositoryImpl $classesRepositoryImpl, PointsRepositoryImpl $pointsRepositoryImpl){
       $this->studentRepo = $repositoryImpl;
       $this->groupsRepository = $groupsRepositoryImpl;
       $this->classesRepository = $classesRepositoryImpl;
       $this->pointsRepository = $pointsRepositoryImpl;
   }

   public function findClassesDates($categ_sbj, $id_sbj, $tch_id) {
       return $this->classesRepository->findClassesWhere($categ_sbj, $id_sbj, $tch_id);
   }

   public function getGroup($id_group){
       return $this->groupsRepository->findById($id_group);
   }

    public function findAllStudentsByIdGroup($id)
    {
        return $this->groupsRepository->findById($id);
    }

    /*public function getStudentsWithMarks($id_group){
       //return $this->studentRepo->findAll()::with('points')->where('group_id', '=', $id_group)->get();
       //return $this->studentRepo->getStudentsByGroupId($id);
        return $this->studentRepo->getStudentsWithMarks($id_group);
   }*/


}