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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('vehicle_type_id')->index();
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types');
            $table->char('vehicle_model_id')->index();
            $table->foreign('vehicle_model_id')->references('id')->on('vehicle_models');
            $table->integer('fms_id')->nullable();
            $table->string('plat_number')->nullable();
            $table->boolean('trailer_connected')->nullable();
            $table->string('photo')->nullable();
            $table->integer('monthly_maintenance')->nullable();
            $table->integer('last_maintenance')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
};
