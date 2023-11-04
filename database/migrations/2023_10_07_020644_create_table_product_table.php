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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');

            $table->string('photo')->nullable();

            $table->mediumText('options')->nullable();
            foreach (config("app.languages", ['en','vi']) as $lang){
                $table->string('slug' . $lang)->nullable();
                $table->mediumText('content' . $lang)->nullable();
                $table->string('name' . $lang)->nullable();
                $table->mediumText('desc' . $lang)->nullable();
            }
            $table->string('code', 30)->nullable();
            $table->double('regular_price')->default(0);
            $table->double('discount')->default(0);
            $table->double('sale_price')->default(0);
            $table->integer('numb')->default(0);
            $table->string('status')->nullable();
            $table->string('type', 30)->nullable();

            $table->integer('view')->default(0);

            $table->timestamps();

            $table->foreignId("product_list_id")->constrained("product_lists", "id", "product_list_product_pk");
            $table->foreignId("product_cat_id")->constrained("product_cats", "id", "product_cat_product_pk");
            $table->foreignId("product_item_id")->constrained("product_items", "id", "product_item_product_pk");
            $table->foreignId("product_sub_id")->constrained("product_subs", "id", "product_sub_product_pk");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
