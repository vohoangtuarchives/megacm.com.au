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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username', 80)->nullable();
            $table->string('password');
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('ward')->nullable();
            $table->string('full_name')->nullable();
            $table->string('ward_district_city')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('avatar')->nullable();
            $table->enum('status', ['pending', 'active', 'banned'])->default('pending');
            $table->double('balance')->default(0);
            $table->unsignedBigInteger('referrer_id')->nullable()->default(1);
            $table->string('referral_code')->nullable();
            $table->string('banking_name')->nullable();
            $table->string('banking_account_name')->nullable();
            $table->string('banking_account_number')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('campaigns')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
