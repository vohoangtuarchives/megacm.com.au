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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->string("label");
            $table->integer("quantity")->default(0);
            $table->double("price")->default(0.0);
            $table->string("tag");
            $table->boolean("quantity_based")->default(true);
            $table->string("image")->nullable();
            $table->unsignedInteger("parent_id")->nullable();
            $table->string("parent_code")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
