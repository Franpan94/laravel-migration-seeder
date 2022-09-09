<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Agency');
            $table->string('Departure_station');
            $table->string('Arrival_station');
            $table->int('Departure_time');
            $table->int('Departure_arrival');
            $table->string('Code_Train');
            $table->int('Number_carriages');
            $table->boolean('In_time');
            $table->boolean('deleted');
            $table->text('post');
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
        Schema::dropIfExists('trains');
    }
}
