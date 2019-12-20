<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->longText('inclusions');
            $table->integer('p_id');
            $table->integer('ip_id');
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
        Schema::dropIfExists('trip_information');
    }
}
