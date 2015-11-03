<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->string('comment');
            $table->integer('postid')->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            
            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('postid')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
