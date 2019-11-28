<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePickBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pick_buses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('bus_id');
            $table->unsignedInteger('route_id');
            $table->string('pickup_status')->comment('pick or drop');
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
        Schema::dropIfExists('pick_buses');
    }
}
