<?php

use Illuminate\Database\Seeder;
use App\Models\Clazz;
use App\Models\Teacher;
class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$user =  Teacher::find(1);
        //$user2 = Teacher::find(2);
        $teachers = Teacher::all();
        foreach( $teachers as $teacher) {
            factory(Clazz::class, 2)->create(['tch_id' => $teacher->id]);
        }
//        $arr = [['tch_id' =>$user->id],
//                ['tch_id' => $user->id],
//                ['tch_id' => $user2->id]];
//        //$arr = [['tch_id' => 1]];
//        print Teacher::all('id');
        //Clazz::insert($arr);


    }
}

//.classes' doesn't exist (SQL: insert into `classes` (`tch_id`) values (1), (1), (2))


