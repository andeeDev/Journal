<?php

use \Illuminate\Database\Seeder;
use \App\Models\Category;

class CategoriesTableSeeder extends Seeder {

    public function run(){
        $arr = array('лекція', 'семінар','практика');
        foreach ($arr as $a) {
            factory(Category::class, 1)->create(['name' => $a]);
        }
    }
}