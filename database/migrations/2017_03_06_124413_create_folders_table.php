<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('parent_id')->unsigned()->index();
           // $table->foreign('parent_id')->references('id')->on('folders')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name',40);
            $table->string('sh_name',30);
            $table->string('used_storage');
            $table->boolean('added_star');
            $table->boolean('lock');
            $table->boolean('hide',60);
            $table->boolean('permission');
            $table->string('path');
            $table->integer('download');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folders');
    }
}

            // "id":3,
            // "user_id":1,
            // "parent_id":1,
            // "name":"music",
            // "sh_name":"KHHlc3Wjbv",
            // "used_storge":"45 MB",
            // "added_star":0,
            // "lock":false,
            // "hide":false,
            // "permission":0,
            // "path":"",
            // "modified":"Apr 21, 2017",
            // "download":0,
            // "created":"April 18, 2017",
            // "created_by":5 