<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_trailers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('vehicle_id')->index();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->char('trailer_id')->index();
            $table->foreign('trailer_id')->references('id')->on('trailers');
            $table->string('status');
            $table->softDeletes();
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
        Schema::dropIfExists('vehicle_trailers');
    }
};
