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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->string("item_id")->nullable();
            $table->string("name");
            $table->string("desc")->nullable();
            $table->text("content")->nullable();
            $table->double("price")->default(0.0);
            $table->integer("quantity")->default(0);
            $table->double("total_price")->default(0.0);
            $table->string("type")->nullable();
            $table->integer("order_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
