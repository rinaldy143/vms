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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('role_id')->index()->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->string('fcm_token')->nullable();
            $table->string('phone_country_code')->nullable();
            $table->unsignedSmallInteger('phone_number', 13)->nullable();
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
