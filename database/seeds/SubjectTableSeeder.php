<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = ['Чисельні методи','Математичні методи','Фізичне виховання'];
        foreach ($arr as $a) {
            factory(\App\Models\Subject::class, 1)->create(['name' => $a]);
        }
    }
}
