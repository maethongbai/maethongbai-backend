<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\Employee;
use App\Models\User;



return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onsite_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Gold::class, "gold_id")->nullable();
            $table->date("sale_date");
            $table->double("gold_price");
            $table->string("payment_method")->nullable()->default(null);
            $table->string("credit_card_type")->nullable()->default(null);
            $table->string("bank_name")->nullable()->default(null);
            $table->double("paid_amount")->default(0);
            $table->double("paid_change")->default(0);
            $table->string("slip_image")->nullable()->default(null);
            $table->foreignIdFor(GoldPrice::class, "gold_sell_price_id")->nullable();
            $table->string("transfer_status")->default("ยังไม่ได้ตรวจสอบ");
            $table->string("transfer_note")->nullable()->default(null);
            $table->boolean("is_switch_gold")->default(false); // เป็นทองเปลี่ยนหรือไม่
            $table->foreignIdFor(Employee::class,"employee_id")->nullable();
            $table->foreignIdFor(User::class,"user_id")->nullable();
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
        Schema::dropIfExists('onsite_sales');
    }
};
