<?php

use App\Models\Point;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
//use  Faker\Generator as Faker;

class PointsTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $classes = App\Models\Clazz::all();
        foreach ($classes as $class) {
            if ($class->ctg_id == 1){
                $students = App\Models\Student::all();
                foreach ($students as $student) {
                    /*$student->classes()->attach($class->id,
                        ['point' => 3,
                            'classes_id' => $class->id,
                            'created_at' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('-4 month', '-3 month')->getTimestamp()),
                            'updated_at' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('-3 month', '0 month')->getTimestamp())
                        ]);*/
                    }
            } else {
                //$students = App\Models\Student::where('group_id', '=', '2')->get();

                    //}


                    /*$temp->save($temp,
                        [   'point' => 3,
                            'created_at' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('-4 month', '-3 month')->getTimestamp()),
                            'updated_at' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('-3 month', '0 month')->getTimestamp())
                        ]
                    );*/
                }


        }
            for ($i = 1; $i <= Student::all()->count(); $i++){
                /*for($j = 0; $j < 10; $j++) {*/
                    $faker = Faker\Factory::create();
                    $temp = App\Models\Student::find($i)->classes()->sync(
                        [$i => ['point' => rand(0, 5),
                            'created_by' => \Carbon\Carbon::createFromDate(2019,rand(1, 6),rand(1,30))->toDateTimeString(),
                            'updated_by' => \Carbon\Carbon::createFromDate(2019,rand(1, 6),rand(1,28))->toDateTimeString()
                                ]
                        ]
                    );
                /*}*/
            }

            for ($i = 1; $i <= Student::all()->count()-50; $i++) {
                $faker = Faker\Factory::create();
                App\Models\Student::find($i)->classes()->attach([$i => ['created_by' => \Carbon\Carbon::createFromDate(2019,rand(1, 6),rand(1,28))->toDateTimeString(),
                    'updated_by' => \Carbon\Carbon::createFromDate(2019,rand(1, 6),rand(1,18))->toDateTimeString()]]);
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
