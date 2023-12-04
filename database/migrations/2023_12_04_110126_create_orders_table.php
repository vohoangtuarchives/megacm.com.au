<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->string("email");
            $table->string("phone");
            $table->string("address")->nullable();
            $table->string("city")->nullable();
            $table->string("apt_suite")->nullable();
            $table->string("post_code")->nullable();
            $table->string("state")->nullable();
            $table->string("service_type")->nullable();
            $table->uuid("uuid");
            $table->double("total_price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
