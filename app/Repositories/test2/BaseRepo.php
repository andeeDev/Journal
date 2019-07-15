<?php


namespace App\Repositories\test2;


class BaseRepo
{
    private  $studentRepo;


   function _construct(StudentRepositoryImpl $repositoryImpl){
       $this->studentRepo = $repositoryImpl;
   }


}