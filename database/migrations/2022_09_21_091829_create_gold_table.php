<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\GoldType;
use App\Models\GoldPattern;
use App\Models\Wholesale;
use App\Models\GoldPrice;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gold', function (Blueprint $table) {
            $table->id(); // รหัสทอง
            $table->string("name"); // ชื่อสินค้า
            $table->foreignIdFor(GoldType::class, "gold_type_id")->nullable(); // รหัสประเภท
            $table->string("weight"); // น้ำหนัก
            $table->double("custom_weight")->nullable()->default(null); // น้ำหนักตามชั่ง
            $table->string("pattern_type"); // ประเภทของลาย (ตัน โป่ง)
            $table->foreignIdFor(GoldPattern::class, "gold_pattern_id")->nullable(); // รหัสลาย
            $table->string("size"); // ขนาด
            $table->double("pension_per_piece"); // ค่าบำเหน็จต่อชิ้น
            $table->unsignedInteger("amount"); // จำนวนชิ้น
            $table->date("import_date"); // วันที่เอาของเข้า
            $table->foreignIdFor(Wholesale::class, "wholesale_id")->nullable(); // รหัสร้านขายส่ง
            $table->foreignIdFor(GoldPrice::class, "buy_price_id")->nullable(); // ราคาทองตอนซื้อจากร้านขายส่ง
            $table->string("stock_approval_status")->default("รออนุมัติ"); // สถานะอนุมัติลง stock (รออนุมัติ อนุมัติ ไม่อนุมัติ)
            $table->string("percentage")->default("96.5% รูปพรรณ"); // เปอร์เซนต์ทอง
            $table->string("brand"); // ยี่ห้อทอง
            $table->string("image"); // รูป
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
        Schema::dropIfExists('gold');
    }
};
