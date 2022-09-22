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
        // พนักงาน
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // รหัสพนักงาน
            $table->string("name_prefix"); // คำนำหน้า
            $table->string("nickname"); // ชื่อเล่น
            $table->date("work_start_date"); // วันที่เริ่มทำงาน
            $table->date("birth_date"); // วันเกิด
            $table->double("salary"); // เงินเดือน
            $table->date("work_quit_date")->nullable()->default(null); // วันที่ลาออก
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
        Schema::dropIfExists('employees');
    }
};
