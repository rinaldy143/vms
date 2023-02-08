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
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('photo')->nullable();
            $table->string('role')->default('MEMBER');
            $table->string('fcm_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('phone_country_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->foreignUuid('type_role_id')->nullable()->references('id')->on('type_roles');
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
