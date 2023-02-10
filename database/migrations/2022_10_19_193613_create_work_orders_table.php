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
        Schema::create('work_orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('vehicle_id')->nullable()->references('id')->on('vehicles');
            $table->foreignUuid('trailer_id')->nullable()->references('id')->on('trailers');
            $table->foreignUuid('breakdown_id')->references('id')->on('breakdowns');
            $table->foreignUuid('unit_condition_id')->references('id')->on('unit_conditions');
            $table->foreignUuid('priority_id')->references('id')->on('priorities');
            $table->foreignUuid('maintenance_type_id')->references('id')->on('maintenance_types');
            $table->foreignUuid('user_id')->references('id')->on('users');
            $table->foreignUuid('type_job_id')->nullable()->references('id')->on('type_jobs');
            $table->foreignUuid('component_id')->nullable();
            $table->string('work_order_number')->unique();
            $table->string('cn_unit');
            $table->string('hm_unit');
            $table->string('km_unit');
            $table->date('start_bd_date')->nullable();
            $table->date('finish_bd_date')->nullable();
            $table->date('start_hr_date')->nullable();
            $table->date('finish_hr_date')->nullable();
            $table->text('problem_description');
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
        Schema::dropIfExists('work_orders');
    }
};
