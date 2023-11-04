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
        Schema::create('customer_campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status', ['pending', 'completed', 'canceled', 'refunded'])->default('pending');
            $table->double('amount')->default(0);
            $table->unsignedBigInteger('campaign_id')->index('customer_campaigns_campaign_id_foreign');
            $table->unsignedBigInteger('customer_id')->index('customer_campaigns_customer_id_foreign');
            $table->integer('referrer_id')->nullable();
            $table->string('referrer_code')->nullable();
            $table->string('date_start')->nullable();
            $table->string('date_end')->nullable();
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
        Schema::dropIfExists('customer_campaigns');
    }
};
