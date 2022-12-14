<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exp__days', function (Blueprint $table) {
            $table->id();
            $table->enum('day',['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->integer('From_hour');
            $table->integer('To_hour');
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
        Schema::dropIfExists('exp__days');
    }
}
