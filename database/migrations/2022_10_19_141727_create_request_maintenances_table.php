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
        Schema::create('request_maintenances', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('vehicle_id')->index()->nullable();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->char('trailer_id')->index()->nullable();
            $table->foreign('trailer_id')->references('id')->on('trailers');
            $table->char('maintenance_type_id')->index()->nullable();
            $table->foreign('maintenance_type_id')->references('id')->on('maintenance_types');
            $table->string('report_by')->nullable();
            $table->string('report_problem')->nullable();
            $table->dateTime('maintenance_date')->nullable();
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
        Schema::dropIfExists('request_maintenances');
    }
};
