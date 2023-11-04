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
        Schema::create('product_lists', function (Blueprint $table) {

            $table->id('id');

            foreach (config("app.languages", ['en','vi']) as $lang){
                $table->string('slug' . $lang)->nullable();
                $table->mediumText('content' . $lang)->nullable();
                $table->string('name' . $lang)->nullable();
                $table->mediumText('desc' . $lang)->nullable();
            }

            $table->string('photo')->nullable();
            $table->mediumText('options')->nullable();
            $table->integer('numb')->default(0);
            $table->string('status')->nullable();
            $table->string('type', 30)->nullable();
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
        Schema::dropIfExists('table_product_list');
    }
};
