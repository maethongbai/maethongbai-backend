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
        // ร้านขายส่ง
        Schema::create('wholesales', function (Blueprint $table) {
            $table->id(); // รหัสร้าน
            $table->string("name"); // ชื่อร้าน
            $table->string("phone"); // เบอร์โทร
            $table->string("address"); // ที่อยู่ร้าน
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
        Schema::dropIfExists('wholesales');
    }
};
