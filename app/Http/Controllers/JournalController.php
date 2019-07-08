<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Subject;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function journal($id_sbj, $categ_sbj, $id_grp, Request $request)
    {
        $students = Group::find($id_grp)->students();
        echo '<pre>';
        var_dump($students);
        foreach ( $students as $student ) {
            $points = $student->classes()->where([
                ['tch_id', '=', 1],
                ['ctg_id', '=', $categ_sbj],
            ])->get();
            var_dump($points);
        }
        echo 'yes';
        exit;


        $classes = Subject::find($id_sbj)->classes()->with('points')->where([
            ['tch_id', '=', 1],
            ['ctg_id', '=', $categ_sbj],
        ])->get();
        /*foreach ($classes as $clazz) {
            $clazz->points();
        }*/
        echo '<pre>';
        //var_dump($classes);
        foreach ($classes as $clazz){
            //foreach ($cl)
            //var_dump($clazz->id);
            foreach($clazz->points as $point) {
                echo 'date = ' . $clazz->date . ' student_id = ' . $point->student_id . ' point = ' . $point->point . '<br>';
            }
        }
        /*foreach($classes as $clazz ) {
            $clazz->points();
        }*/


        return view('journal')->with(['students'=>$students->get(), 'classes;' => $classes ]);
    }
}
