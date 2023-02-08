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
            $table->boolean('request_sparepart')->nullable();
            $table->foreignUuid('request_maintenance_id')->nullable()->references('id')->on('request_maintenances');
            $table->foreignUuid('user_id')->nullable()->references('id')->on('users');
            $table->foreignUuid('type_job_id')->nullable()->references('id')->on('type_jobs');
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
