<?php

use Illuminate\Database\Seeder;
use App\Models\Clazz;
use App\Models\Teacher;
use Faker\Factory as Faker;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $teachers = Teacher::all();
        $categories = App\Models\Category::all();
        $subjects = App\Models\Subject::all();





        for($i = 0; $i < 20;  $i++){
            factory(Clazz::class, 1)->create([
                'tch_id' => $teachers->random(1)->first()->id,
                'ctg_id' => $categories->random(1)->first()->id,
                'sbj_id' => $subjects->random(1)->first()->id,
                'datetime' =>  $faker->dateTimeBetween($startDate = '-10 days', $endDate = 'now')
                    //date("Y-m-d H:i:s", strtotime('-'.rand(0,30).'days', time()))
            ]);
        }

    }
}
