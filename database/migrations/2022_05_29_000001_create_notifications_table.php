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
        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('receiver_id')->index()->nullable();
            $table->foreign('receiver_id')->references('id')->on('users');
            $table->string('title');
            $table->text('body');
            $table->string('fcm_multicast_id')->nullable();
            $table->string('fcm_success')->nullable();
            $table->string('fcm_canonical_ids')->nullable();
            $table->string('fcm_results')->nullable();
            $table->dateTime('read_at')->nullable();
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
        Schema::dropIfExists('notifications');
    }
};
