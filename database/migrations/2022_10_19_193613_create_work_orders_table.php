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
            $table->boolean('req_sparepart')->nullable();
            $table->foreignUuid('rm_id')->nullable()->references('id')->on('request_maintenances');
            $table->foreignUuid('user_id')->nullable()->references('id')->on('users');
            $table->string('jobsite_location')->nullable();
            $table->string('damage_component')->nullable();
            $table->string('damaged_level')->nullable();
            $table->string('analysist')->nullable();
            $table->string('assign_by')->nullable();
            // $table->foreignUuid('type_job_id')->nullable()->references('id')->on('type_jobs');
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
