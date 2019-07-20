<?php

use App\Models\Clazz;
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
        $students = App\Models\Student::all();
        $classes = App\Models\Clazz::all();

        foreach ($classes as $class){
            for ($i = 1; $i <= \App\Models\Student::all()->count(); $i++) {
                DB::table('points')->insert(['classes_id' => $class->id, 'student_id' => $i,
                    'point' => rand(0, 5),
                    'created_by' => Carbon::createFromTimeStamp($faker->dateTimeBetween('-4 month', '-3 month')->getTimestamp()),
                    'updated_by' => Carbon::createFromTimeStamp($faker->dateTimeBetween('-3 month', '0 month')->getTimestamp())
                ]);
            }
        }

        foreach ($classes as $class) {
            foreach ($students as $student) {
                /*$student->classes()->attach($class->id,
                    ['point' => 3,

                        'created_by' => Carbon::createFromTimeStamp($faker->dateTimeBetween('-4 month', '-3 month')->getTimestamp()),
                        'updated_by' => Carbon::createFromTimeStamp($faker->dateTimeBetween('-3 month', '0 month')->getTimestamp())
                    ]);//'classes_id' => $class->id,*/
            }
        }



                //$students = App\Models\Student::where('group_id', '=', '2')->get();

                    //}


                    /*$temp->save($temp,
                        [   'point' => 3,
                            'created_at' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('-4 month', '-3 month')->getTimestamp()),
                            'updated_at' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('-3 month', '0 month')->getTimestamp())
                        ]
                    );*/
                }



        /*$faker = Faker\Factory::create();
        $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now');

            for ($i = 1; $i <= Student::all()->count(); $i++){
                $rand = rand(1, 3);
                    $faker = Faker\Factory::create();
                    $temp = App\Models\Student::find($i)->classes()->attach(
                        [$i => ['point' => rand(0, 5)
                            'created_by' => Carbon::createFromTimeStamp($faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')->getTimestamp())->format('Y-m-d'),
                            'updated_by' => Carbon::createFromTimeStamp($faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')->getTimestamp())->format('Y-m-d')
                                ],
                            $rand => ['point' => 6],
                            $rand + 1 =>  ['point' => 7]
                        ]
                    );
            }*/

            /*for ($i = 1; $i <= Student::all()->count(); $i++) {
                $faker = Faker\Factory::create();
                App\Models\Student::find($i)->classes()->attach([$i => ['created_by' => \Carbon\Carbon::createFromDate(2019,rand(1, 6),rand(1,28))->toDateTimeString(),
                    'updated_by' => \Carbon\Carbon::createFromDate(2019,rand(1, 6),rand(1,18))->toDateTimeString()]]);
            }*/




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
