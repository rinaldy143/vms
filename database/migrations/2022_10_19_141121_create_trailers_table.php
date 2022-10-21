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
        Schema::create('trailers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code_trailer')->nullable();
            $table->string('vehicle_connected')->nullable();
            $table->string('photo')->nullable();
            $table->integer('monthly_maintenance')->nullable();
            $table->integer('last_maintenance')->nullable();
            $table->foreignUuid('model_trailer_id')->nullable()->references('id')->on('model_trailers');
            $table->foreignUuid('type_trailer_id')->nullable()->references('id')->on('type_trailers');
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
        Schema::dropIfExists('trailers');
    }
};
