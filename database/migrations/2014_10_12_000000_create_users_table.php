<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Employee;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ผู้ใช้
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique()->default(fake()->unique()->userName());
            $table->string('email')->unique()->nullable(); // อีเมล
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string("name_prefix"); // คำนำหน้าชื่อ
            $table->string("first_name"); // ชื่อ
            $table->string("last_name"); // นามสกุล
            $table->string("phone")->unique(); // เบอร์โทร
            $table->string("id_card_number")->nullable()->default(null); // เลขบัตรประชาชน
            $table->string("address")->nullable()->default(null); // ที่อยู่
            $table->string("role")->default("user"); // ตำแหน่ง (user,employee,account,manager)
            $table->foreignIdFor(Employee::class,"employee_id")->nullable()->default(null); // ถ้าเป็นพนักงานจะไม่เป็น null
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
        Schema::dropIfExists('users');
    }
};
