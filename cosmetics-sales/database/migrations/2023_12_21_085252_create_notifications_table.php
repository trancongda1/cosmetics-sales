<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50);
            $table->text('content');
            $table->string('url', 255);
            $table->tinyInteger('type');
            $table->bigInteger('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('users'); // Replace 'users' with your actual users table name
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}


