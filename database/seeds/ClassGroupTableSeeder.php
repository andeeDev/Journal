<?php

use Illuminate\Database\Seeder;
use \App\Models\Group;

class classGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups[]  = Group::all();
        $classes = \App\Models\Clazz::all();
        $i = 0;
        foreach ($groups as $g) {


            factory(\App\Models\ClassGroup::class, 2)->create([
                'group_id' => $g[$i]->id,
                'class_id' => $classes[$i]->id]);
            $i++;
        }
    }
}
