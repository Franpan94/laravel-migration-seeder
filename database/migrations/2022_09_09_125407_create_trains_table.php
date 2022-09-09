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
            $table->string('agency');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->integer('departure_time');
            $table->integer('departure_arrival');
            $table->string('code_Train');
            $table->integer('number_carriages');
            $table->boolean('in_time');
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
