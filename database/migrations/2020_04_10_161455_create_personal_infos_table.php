<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->text('mname')->nullable();
            $table->string('email');
            $table->text('profession')->nullable();
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('postal')->nullable();
            $table->string('city')->nullable();
            $table->text('country')->nullable();
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
        Schema::dropIfExists('personal_infos');
    }
}
