<?php

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
            if ($class->ctg_id == 0) {
                $this->makePoints($students, $class->id, rand(0,1) ? 0.5 : 0 );
            } else {
                $students = App\Models\Student::getByGroup($groups[$i]->id);
                $this->makePoints($students, $class->id, rand(0, 5) );
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
