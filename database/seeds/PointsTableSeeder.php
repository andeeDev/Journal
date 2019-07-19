<?php

use App\Models\Point;
use Illuminate\Database\Seeder;

class PointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = App\Models\Clazz::all();

        foreach ($classes as $class) {
            if($class->ctg_id == 1){
                $students = App\Models\Student::all();
                App\Models\Student::find(1)->classes()->save($class, ['point' => 3]);
            }
        }



        /*$clazzes = App\Models\Clazz::all();
        $students = App\Models\Student::all();
        $groups = App\Models\Group::all();
        $i = 0;
        foreach ($clazzes as $class) {
            if ($class->ctg_id == 1) {
                // points for all students on lecture
                $this->makePoints($students, $class->id,  $class->ctg_id);
            } else {
                // points for students in group
                $s = App\Models\Student::getByGroup($groups[$i]->id);
                $this->makePoints($s, $class->id, $class->ctg_id);
            }
            $i++;
        }*/
    }

    /*private function makePoints($students, $class_id, $ctg_id) {
        foreach ($students as $student) {
            factory(App\Models\Point::class, 1)->create([
                'classes_id' => $class_id,
                'student_id' => $student,
                'point' => $ctg_id == 1  ? rand(0, 10) / 10  : rand(0, 5)
            ]);
        }
    }*/
}
