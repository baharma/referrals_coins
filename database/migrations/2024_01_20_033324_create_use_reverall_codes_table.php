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
        Schema::create('use_reverall_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user')->references('id')->on('users');
            $table->foreignId('reveral_id')->references('id')->on('reverals_users');
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
        Schema::dropIfExists('use_reverall_codes');
    }
};
