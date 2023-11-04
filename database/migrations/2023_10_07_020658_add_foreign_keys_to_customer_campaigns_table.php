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
        Schema::table('customer_campaigns', function (Blueprint $table) {
            $table->foreign(['campaign_id'])->references(['id'])->on('campaigns')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['customer_id'])->references(['id'])->on('customers')->onUpdate('CASCADE')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_campaigns', function (Blueprint $table) {
            $table->dropForeign('customer_campaigns_campaign_id_foreign');
            $table->dropForeign('customer_campaigns_customer_id_foreign');
        });
    }
};
