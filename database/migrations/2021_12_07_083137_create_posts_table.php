<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('title', 50);
            $table->string('content', 200);
             $table->string('meeting_place', 50);
             $table->datetime('meeting_time');
             $table->integer('user_id')->unsigned();
             $table->bigInteger('category_id')->unsigned();
            
             
            
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}