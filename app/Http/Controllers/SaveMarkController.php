<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;

class SaveMarkController extends Controller
{
    public function saveMark(Request $request) {

        //echo $request;
        //$msg = "d            s";
        //echo $msg;
        return response()->json(['success'=>'Data is successfully added']);
        //return response()->json(array('msg'=> $msg), 200);
    }

}
