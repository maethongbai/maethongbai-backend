<?php

use App\Models\Employee;
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
            $table->string("name")->nullable(); // ชื่อสินค้า
            $table->foreignIdFor(GoldType::class, "gold_type_id")->nullable(); // รหัสประเภท
            $table->string("weight")->nullable()->default(null); // น้ำหนัก
            $table->double("custom_weight")->nullable()->default(null); // น้ำหนักตามชั่ง
            $table->string("pattern_type")->nullable(); // ประเภทของลาย (ตัน โป่ง)
            $table->foreignIdFor(GoldPattern::class, "gold_pattern_id")->nullable(); // รหัสลาย
            $table->string("size")->nullable(); // ขนาด
            $table->double("pension_per_piece")->nullable(); // ค่าบำเหน็จต่อชิ้น
            $table->date("import_date"); // วันที่เอาของเข้า or วันที่รับของจากลูกค้า
            $table->foreignIdFor(Wholesale::class, "wholesale_id")->nullable(); // รหัสร้านขายส่ง
            $table->integer("gold_buy_price_wholesale")->nullable();// ราคาทองตอนซื้อจากร้านขายส่ง
            $table->string("stock_approval_status")->default("รออนุมัติ"); // สถานะอนุมัติลง stock (รออนุมัติ อนุมัติ ไม่อนุมัติ)
            $table->boolean("is_sold")->default(false); // ขายทองรึยัง (true/false) true = ขายที่ร้านไปแล้ว
            $table->boolean("is_redemption")->default(false); // เป็นทองรับซื้อหรือไม่ (true/false) true = รับซื้อ
            $table->string("percentage")->default("96.5% รูปพรรณ"); // เปอร์เซนต์ทอง
            $table->string("brand")->nullable(); // ยี่ห้อทอง กรณีรับซื้อจากลูกค้า
            $table->mediumText("image")->nullable()->default(null); // รูป
            $table->foreignIdFor(Employee::class,"employee_add_stock_id")->nullable();//พนักงานที่เพิ่มทองลงstock
            $table->timestamps();
            // check stock => name != null && is_sold == false && stock_approval_status == "อนุมัติ"
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
