<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Models\GoldPrice;
use App\Models\Employee;
use App\Models\User;
use App\Models\Gold;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // รับซื้อคืน
        Schema::create('redemptions', function (Blueprint $table) {
            $table->id(); // เลขที่รายการรับซื้อคืน
            $table->foreignIdFor(Gold::class,"gold_id");
            $table->date("redemption_date"); // วันที่รับซื้อ
            $table->foreignIdFor(GoldPrice::class, "gold_redemption_id"); // ราคาทองตอนรับซื้อ
            $table->double("redemption_price"); // ราคารับซื้อ
            $table->string("check_status")->default("รอตรวจสอบ"); // สถานะตรวจสอบ (รอตรวจสอบ, ผ่านการตรวจสอบ, ไม่ผ่านการตรวจสอบ)
            $table->foreignIdFor(Employee::class, "employee_id"); // รหัสพนักงาน
            $table->foreignIdFor(User::class, "user_id"); // รหัสลูกค้า
            $table->string("id_card_image"); // รูปบัตรประชาชน
            $table->string("note"); // หมายเหตุ
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
        Schema::dropIfExists('redemptions');
    }
};
