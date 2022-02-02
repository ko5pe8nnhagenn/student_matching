<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('categories')->insert([
            ['category_name' => 'after_school'],
            ['category_name' => 'lunch_time'],
            ['category_name' => 'vacation_time']
        ]);
    }
}
