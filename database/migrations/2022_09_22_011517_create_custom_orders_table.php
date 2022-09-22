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
        Schema::create('custom_orders', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type");
            $table->string("weight");
            $table->double("wage");
            $table->double("full_price");
            $table->double("deposit_total_amount");
            $table->double("difference_amount");
            $table->date("finish_date")->nullable()->default(null);
            $table->date("order_date");
            $table->date("delivery_date");
            $table->foreignIdFor(\App\Models\CustomOrderWorker::class, "custom_order_worker_id")->nullable();
            $table->foreignIdFor(\App\Models\GoldPrice::class, "gold_order_price_id")->nullable(); // ราคาขาย
            $table->string("deposit_payment_method")->nullable()->default(null);
            $table->string("deposit_credit_card_type")->nullable()->default(null);
            $table->string("deposit_bank_name")->nullable()->default(null);
            $table->double("deposit_paid_amount")->default(0);
            $table->double("deposit_change_amount")->default(0);
            $table->string("deposit_slip_image")->nullable()->default(null);
            $table->string("deposit_status")->default("ยังไม่ได้ตรวจสอบ");
            $table->string("deposit_note")->nullable()->default(null);
            $table->foreignIdFor(\App\Models\User::class, "user_id")->nullable();
            $table->foreignIdFor(\App\Models\Employee::class, "employee_id")->nullable();
            $table->string("custom_order_status")->default("รับเรื่อง");
            $table->string("difference_payment_method")->nullable()->default(null);
            $table->string("difference_credit_card_type")->nullable()->default(null);
            $table->string("difference_bank_name")->nullable()->default(null);
            $table->double("difference_paid_amount")->default(0);
            $table->double("difference_change_amount")->default(0);
            $table->string("difference_slip_image")->nullable()->default(null);
            $table->string("difference_status")->default("ยังไม่ได้ตรวจสอบ");
            $table->string("difference_note")->nullable()->default(null);


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
        Schema::dropIfExists('custom_orders');
    }
};
