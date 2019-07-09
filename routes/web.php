<?php


Route::get('/','IndexController@index');

Route::get('/journal/{id_sbj}/{categ_sbj}/{ig_grp}',  'JournalController@journal');

Route::post('/mark', 'TeacherController@saveMark');
