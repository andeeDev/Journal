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
        $i = 0;

        foreach( $teachers as $teacher) {
            factory(Clazz::class, 2)->create([
                'tch_id' => $teacher->id,
                'ctg_id' => $categories[$i]->id,
                'sbj_id' => $subjects[$i]
            ]);
            $i++;
        }
    }
}
