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
        $clazzes = App\Models\Clazz::all();
        $students = App\Models\Student::all();
        $groups = App\Models\Group::all();
        $i = 0;
        foreach ($clazzes as $class) {
            if ($class->ctg_id == 1) {
                $this->makePoints($students, $class->id, rand(0,1) ? 1 : 0 );
//                factory(App\Models\Point::class, 1)->create([
//                    'classes_id' => $class,
//                    'student_id' => 3,
//                    'point' => 6
//                ]);
            } else {
                $s = App\Models\Student::getByGroup($groups[$i]->id);
                $this->makePoints($s, $class->id, rand(0, 5) );

//                factory(App\Models\Point::class, 1)->create([
//                    'classes_id' => $class,
//                    'student_id' => 4,
//                    'point' => 7
//                ]);
            }
            $i++;
        }
    }

    private function makePoints($students, $class_id, $point) {
        foreach ($students as $student) {
            factory(App\Models\Point::class, 1)->create([
                'classes_id' => $class_id,
                'student_id' => $student,
                'point' => $point
            ]);
        }

    }
}
