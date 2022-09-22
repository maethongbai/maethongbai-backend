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
        Schema::create('online_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Gold::class, "gold_id")->nullable();
            $table->date("sale_date");
            $table->double("gold_price");
            $table->string("slip_image");
            $table->string("transfer_status")->default("ยังไม่ได้ตรวจสอบ");
            $table->string("transfer_note")->nullable()->default(null);
            $table->string("additional_note")->nullable()->default(null);
            $table->foreignIdFor(\App\Models\GoldPrice::class, "gold_sell_price_id")->nullable();
            $table->unsignedInteger("amount");
            $table->string("custom_order_status")->default("รอตรวจสอบ");
            $table->string("delivery_status")->nullable()->default(null);
            $table->string("tracking_number")->nullable()->default(null);
            $table->foreignIdFor(\App\Models\Employee::class, "tracking_id_employee_id")->nullable()->default(null);
            $table->foreignIdFor(\App\Models\Employee::class, "delivery_status_employee_id")->nullable()->default(null);
            $table->string("note")->nullable()->default(null);
            $table->foreignIdFor(\App\Models\User::class, "user_id")->nullable();
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
        Schema::dropIfExists('online_sales');
    }
};
