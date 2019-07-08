<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function journal($id_sub, $id_grp, Request $request) {
        return view('journal')->with('students', Group::find($id_grp)->students()->get());
    }
}
