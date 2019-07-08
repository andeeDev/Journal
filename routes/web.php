<?php


Route::get('/journal/{id_sub}/{ig_grp}',  'JournalController@journal');






Route::get('/mark', function () {
    return view('tmakem');
});

Route::get('/sub', function () {
    return view('ts');
});

Route::get('/std', function () {
    return view('student');
});



Route::post('/mark', 'TeacherController@saveMark');
