<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('password', 60);
            $table->string('title', 255)->nullable();
            $table->tinyInteger('gender');
            $table->string('avatar_url', 255)->nullable();
            $table->text('education')->nullable();
            $table->string('location', 255)->nullable();
            $table->text('skills')->nullable();
            $table->text('notes')->nullable();
            $table->date('birthday');
            $table->string('roles', 255)->nullable();
            $table->tinyInteger('is_active');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
