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
            $table->string('report_by')->nullable();
            $table->string('report_problem')->nullable();
            $table->string('dampak')->nullable();
            $table->float('C1')->nullable();
            $table->float('C2')->nullable();
            $table->float('C3')->nullable();
            $table->float('C4')->nullable();
            $table->float('preferensi')->nullable();
            $table->float('vektor')->nullable();
            // $table->integer('maintenance_date')->nullable();
            $table->foreignUuid('vehicle_id')->nullable()->references('id')->on('vehicles');
            // $table->foreignUuid('trailer_id')->nullable()->references('id')->on('trailers');
            $table->integer('km_Unit')->nullable();
            $table->integer('hm_Unit')->nullable();
            $table->string('unit_condition')->nullable();
            $table->string('priority')->nullable();
            $table->string('activity_maintenance')->nullable();
            $table->string('analysist')->nullable();
            $table->string('aprove_by')->nullable();

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
