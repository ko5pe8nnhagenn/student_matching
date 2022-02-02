<?php

use Illuminate\Database\Seeder;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert([
            [
              'user_id' => 1,
              'category_id' => 1,
              'title' => 'hoge',
              'content' => 'test',
              'meeting_time' => 2000-02-02 00:00:00,
              'meeting_place' => 'test'
            ],
          
        ]);
    }
    }
}
