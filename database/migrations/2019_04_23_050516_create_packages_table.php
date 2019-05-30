<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('p_id');
            $table->string('title');
            $table->string('description');
            // $table->integer('rating');
            $table->integer('ticket_quantity');
            $table->string('duration');
            $table->date('start_date');
            $table->date('end_date');
            $table->double('price');
            $table->string('location');
            $table->integer('package_type');

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
        Schema::dropIfExists('packages');
    }
}
