<?php


use Illuminate\Database\Seeder;
//use database\seeds\ClassesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(TeacherTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(PointsTableSeeder::class);
        $this->call(classGroupTableSeeder::class);





        // Re enable all mass assignment restrictions
        //Model::reguard();

        //$this->call('TeacherTableSeeder');
        //$this->command->info('Таблица учителей заполнена данными!');
    }


}

//class TeacherTableSeeder extends Seeder {
//
//    public function run() {
//        factory('App\Teacher', 10)->create();
//        //DB::table('teacher')->delete();
//
////        $arr = [[ 'name' => 'Зоя', 'surname' => 'Маслова'],
////        ['name'=> 'Тиркусова', 'surname'=>'Надія']];
////        Teacher::insert($arr);
//    }
//}
