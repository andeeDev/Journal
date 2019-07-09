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
        factory(Teacher::class, 2)->create();
    }
}
