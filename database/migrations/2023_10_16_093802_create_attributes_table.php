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
        Schema::create('attribute_groups', function (Blueprint $table) {
            $table->id();
            $table->string("code", 30)->nullable();
            $table->string("name");
            $table->string("type", 30)->nullable();
            $table->timestamps();
        });

        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string("code", 30)->nullable();
            $table->string("name");
            $table->foreignId("attribute_group_id")->constrained("attribute_groups");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_groups');
        Schema::dropIfExists('attributes');
    }
};
