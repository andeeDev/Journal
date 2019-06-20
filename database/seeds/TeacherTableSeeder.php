<?php

use Illuminate\Database\Seeder;
use App\Models\Teacher;

//use Illuminate\Database\Seeder;

 class TeacherTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(Teacher::class, 3)->create();
        //DB::table('teacher')->delete();

//        $arr = [[ 'name' => 'Зоя', 'surname' => 'Маслова'],
//        ['name'=> 'Тиркусова', 'surname'=>'Надія']];
//        Teacher::insert($arr);
    }
}
