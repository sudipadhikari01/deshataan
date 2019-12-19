<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsSpecialFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels_special_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('places_covered');
            $table->text('inclusions');
            $table->text('exclusions');
            $table->date('event_date');
            $table->integer('hotel_title_id');
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
        Schema::dropIfExists('hotels_special_features');
    }
}
