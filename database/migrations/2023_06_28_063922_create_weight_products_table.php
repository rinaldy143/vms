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
        Schema::create('weight_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kriteria')->nullable();
            $table->integer('nilai_bobot')->nullable();
            $table->float('prioritas')->nullable();
            $table->float('bobot')->nullable();
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
        Schema::dropIfExists('weight_products');
    }
};
