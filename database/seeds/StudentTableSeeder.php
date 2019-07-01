<?php

use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\Student;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = Group::all();
        foreach ($groups as $group) {
            factory(Student::class, 10)->create(['group_id' => $group->id]);
        }
    }
}
