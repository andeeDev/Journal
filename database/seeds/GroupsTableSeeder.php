<?php

use Illuminate\Database\Seeder;
use App\Models\Group;
class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Group::class, 2)->create();//6
    }
}
