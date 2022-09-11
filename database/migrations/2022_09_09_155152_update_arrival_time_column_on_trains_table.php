<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateArrivalTimeColumnOnTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('trains', function (Blueprint $table) {
            //
            $table->renamecolumn('departure_arrival','arrival_time')->change();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            //
            $table->renamecolumn('arrival_time','departure_arrival')->change();
        });
    }
}
