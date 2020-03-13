<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipscheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipschedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vessel_name');
            $table->string('vessel_voyage');
            $table->string('vessel_line');
            $table->string('vessel_status')->nullable();
            $table->string('vessel_terminal');
            $table->string('vessel_port');
            $table->string('vessel_arrival_date')->nullable();
            $table->string('vessel_berthing_time')->nullable();
            $table->string('vessel_departure_time')->nullable();
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
        Schema::dropIfExists('shipschedule');
    }
}
