<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
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
            $table->string('title');
            $table->string('content')->nullable();
            $table->string('image');
            $table->string('user_id')->nullable();
            $table->string('views')->nullable();
            $table->string('status_id');
            $table->string('category_id');
            $table->string('members_id')->nullable();
            $table->timestamps();
            $table->string('del_flg', 1)->default(0);
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
