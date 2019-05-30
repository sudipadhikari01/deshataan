<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTheTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_the_tour', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('places_covered');
            $table->string('inclusions');
            $table->string('exclusions');
            $table->date('event_date');
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
        Schema::dropIfExists('about_the_tour');
    }
}
