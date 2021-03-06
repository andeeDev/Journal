<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;

use App\Repositories\test2\BaseImplementations\StudentRepositoryImpl;
use App\Repositories\test2\Repository;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public $repository;
    public $studentRepositoryImpl;

    public function __construct(Repository $repository, StudentRepositoryImpl $studentRepositoryImpl){
        $this->repository = $repository;
        $this->studentRepositoryImpl = $studentRepositoryImpl;
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
        return view('journal')->with(
                ['groupName' => $this->repository->getGroup($id_grp),
                    'dates' => $this->repository->findClassesDates($categ_sbj, $id_sbj, 1),
                    'studentAndMark' => $this->studentRepositoryImpl->getStudentsWithMarks($id_grp)
                    ]);// $this->repository->findAllGroupsById($id_grp)
        //'studentAndMark'=> $this->repository->getStudentsWithMarks($id_grp)
        //, 'groups' => $this->repository->findAllStudentsById($id_grp)
    }
}
