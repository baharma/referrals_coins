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
        Schema::create('level_reverals', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->foreignId('user')->references('id')->on('users');
            $table->double('bonus_log');
            $table->integer('percent');
            $table->foreignId('name_use')->references('id')->on('users');
            $table->timestamp('date');
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
        Schema::dropIfExists('level_reverals');
    }
};
