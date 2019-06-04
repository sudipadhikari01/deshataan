<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsRoomAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels_room_availabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('amenities');
            $table->string('includes');
            $table->string('maximum_person');
            $table->string('price');
            $table->integer('hotel_type_id');
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
        Schema::dropIfExists('hotels_room_availabilities');
    }
}
