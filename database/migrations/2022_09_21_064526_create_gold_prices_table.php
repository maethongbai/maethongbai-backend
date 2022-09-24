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
        // ราคาทอง
        Schema::create('gold_prices', function (Blueprint $table) {
            $table->id();
            $table->dateTime("datetime"); // วันที่และเวลา
            $table->double("buy_price"); // ราคาทองรับซื้อ
            $table->double("sell_price"); // ราคาทองขาย
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
        Schema::dropIfExists('gold_prices');
    }
};
