<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;

class TeacherController extends Controller
{
    public function saveMark(Request $request) {

        //var_dump($request->input('mark'));
        return \View::make("welcome");
    }

}
