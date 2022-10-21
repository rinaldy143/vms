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
            $table->string('plat_number')->nullable();
            $table->boolean('trailer_connected')->nullable();
            $table->string('photo')->nullable();
            $table->integer('monthly_maintenance')->nullable();
            $table->integer('last_maintenance')->nullable();
            $table->integer('id_fms')->nullable();
            $table->foreignUuid('model_vehicle_id')->nullable()->references('id')->on('model_vehicles');
            $table->foreignUuid('type_vehicle_id')->nullable()->references('id')->on('type_vehicles');
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
