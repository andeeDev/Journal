<?php


use App\Models\Group;
use \Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder {

    public function run() {
        factory(Group::class, 3)->create();
    }
}