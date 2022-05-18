<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('nosotros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('imagen');
            $table->text('descripcion');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->float('precio');
            $table->integer('cupo');
            $table->string('imagen');
            $table->text('descripcion');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('imagen');
            $table->text('descripcion');
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('nosotros');
        Schema::dropIfExists('users');

    }
};
