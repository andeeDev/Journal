<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Subject;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function journal($id_sbj, $categ_sbj, $id_grp, Request $request)
    {
        $students = Group::find($id_grp)->students()->get();

        $i = 0;

        foreach ($students as $student) {
            dump($student->classes()->get());

            //cho $i++;
            //echo $student->name.'<br>';

            //foreach ($cl)
            //var_dump($clazz->id);
            /*foreach($student->classes as $clazz) {
                echo 'date = ' . $clazz->datetime . ' student_id = ' . $student->id . ' point = ' . $clazz->pivot->point . '<br>';
            }*/
        }

        //exit;
        /*foreach($classes as $clazz ) {
            $clazz->points();
        }*/


        //return view('journal')->with(['students'=>$students->get(), 'classes;' => $classes ]);
    }
}
