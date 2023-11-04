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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string("slug")->index();
            $table->string("name")->index();
            $table->longText("desc")->nullable();
            $table->longText("content")->nullable();
            $table->string("status");

            $table->string("photo")->nullable();

            $table->text("meta_title")->nullable();
            $table->text("meta_description")->nullable();
            $table->text("meta_keywords")->nullable();
            $table->text("meta_photo")->nullable();
            $table->text("meta_options")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_categories');
    }
};
