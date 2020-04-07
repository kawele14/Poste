<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('amount');
            $table->text('duration');
            $table->string('reason');

            $table->string('fname');
            $table->text('lname');
            $table->string('email');
            $table->text('profession');
            $table->string('phone');
            $table->string('dob');
            $table->text('address');
            $table->string('postal');
            $table->string('city');
            $table->text('country');
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
        Schema::dropIfExists('loans');
    }
}
