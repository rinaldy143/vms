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
        Schema::table('request_maintenances', function (Blueprint $table) {
            $table->foreignUuid('wo_id')->nullable()->references('id')->on('work_orders');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_maintenances', function (Blueprint $table) {
            $table->dropForeign(['wo_id']);
            $table->dropColumn('wo_id');
        });    }
};
