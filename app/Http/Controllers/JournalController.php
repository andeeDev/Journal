<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use App\Repositories\Criteria\StudentsByGroup;
use App\Repositories\test2\Repository;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public $repository;


    public function __construct(Repository $repository){
        $this->repository = $repository;
    }

    public function journal($id_sbj, $categ_sbj, $id_grp, Request $request)
    {
        /*$students = Group::find($id_grp)->students()->get();*/
        //$test = Student::all()->pushCriteria(new StudentsByGroup());
        $i = 0;
        //dd($test);
        /*foreach ($students as $student) {
            dump($student->classes()->get());*/

            //cho $i++;
            //echo $student->name.'<br>';

            //foreach ($cl)
            //var_dump($clazz->id);
            /*foreach($student->classes as $clazz) {
                echo 'date = ' . $clazz->datetime . ' student_id = ' . $student->id . ' point = ' . $clazz->pivot->point . '<br>';
            }*/
        /*}*/

        //exit;
        /*foreach($classes as $clazz ) {
            $clazz->points();
        }*/


        //return view('journal')->with(['students'=> $this->repository->, 'classes;' => $classes ]);
        return view('journal')->with( ['a' => $this->repository] );// $this->repository->findAllGroupsById($id_grp)
        //, 'groups' => $this->repository->findAllStudentsById($id_grp)
    }
}
