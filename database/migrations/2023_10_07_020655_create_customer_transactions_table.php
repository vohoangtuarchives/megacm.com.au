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
        Schema::create('customer_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->double('old_balance');
            $table->double('amount');
            $table->double('balance');
            $table->unsignedBigInteger('customer_id')->index('customer_transactions_customer_id_foreign');
            $table->timestamps();
            $table->integer('campaign_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_transactions');
    }
};
