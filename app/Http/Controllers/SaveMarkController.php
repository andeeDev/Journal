<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Point;
use Psy\Util\Json;

class SaveMarkController extends Controller
{
    public function saveMark(Request $request) {

        $jsonArray = (array)json_decode($request->getContent(), true);

        $point = Point::find($jsonArray['point_id']);
        $point->created_by = date('Y-m-d H:i:s');
        $point->updated_by = date('Y-m-d H:i:s');
        $point->point = $jsonArray['value'];
        $point->save();
        //$point->save();
        /*DB::table('points')->update(['classes_id' => 1, 'student_id' => $i,
            'point' => $jsonArray[point],
            'created_by' => now(),
            'updated_by' => now()
            ]);*/
        $q = "\"".sha1($jsonArray['point_id']."andee".$jsonArray['tch_id'])."\"";
        return response()->json($request);
    }

}
