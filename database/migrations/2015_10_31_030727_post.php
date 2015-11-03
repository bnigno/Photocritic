<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->string('photo')->nullable();
            $table->string('description')->nullable();
            $table->string('aperture')->nullable();
            $table->string('exposure_time')->nullable();
            $table->string('iso')->nullable();
            $table->string('camera')->nullable();
            $table->string('focal_length')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->foreign('userid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
