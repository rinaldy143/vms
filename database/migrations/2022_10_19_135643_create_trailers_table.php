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
            $table->char('trailer_type_id')->index();
            $table->foreign('trailer_type_id')->references('id')->on('trailer_types');
            $table->char('trailer_model_id')->index();
            $table->foreign('trailer_model_id')->references('id')->on('trailer_models');
            $table->string('code_trailer')->nullable();
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
        Schema::dropIfExists('trailers');
    }
};
