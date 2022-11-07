<?php

namespace Database\Seeders;

use App\Models\GoldPattern;
use App\Models\GoldPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoldPatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = GoldPattern::where("id",1)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ปอกมีด";
            $obj->save();
        }

        $obj = GoldPattern::where("id",2)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ผ่าหวาย";
            $obj->save();
        }

        $obj = GoldPattern::where("id",3)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "สี่เสา";
            $obj->save();
        }

        $obj = GoldPattern::where("id",4)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "โซ่ฝรั่ง";
            $obj->save();
        }

        $obj = GoldPattern::where("id",5)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ดิสโก้";
            $obj->save();
        }

        $obj = GoldPattern::where("id",6)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ซีตรอง";
            $obj->save();
        }

        $obj = GoldPattern::where("id",7)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "กระดูกงู";
            $obj->save();
        }

        $obj = GoldPattern::where("id",8)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ซีตรองคั่นปล้อง";
            $obj->save();
        }

        $obj = GoldPattern::where("id",9)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "บิดนูน";
            $obj->save();
        }

        $obj = GoldPattern::where("id",10)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ตัดเหลี่ยม";
            $obj->save();
        }

        $obj = GoldPattern::where("id",11)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ดอกไม้";
            $obj->save();
        }

        $obj = GoldPattern::where("id",12)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "หัวใจ";
            $obj->save();
        }

        $obj = GoldPattern::where("id",13)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ตะปู";
            $obj->save();
        }

        $obj = GoldPattern::where("id",14)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ตุ้งติ้ง";
            $obj->save();
        }

        $obj = GoldPattern::where("id",15)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "คตกริช";
            $obj->save();
        }

        $obj = GoldPattern::where("id",16)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "มิกกี้";
            $obj->save();
        }

        $obj = GoldPattern::where("id",17)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ห่วงคู่";
            $obj->save();
        }

        $obj = GoldPattern::where("id",18)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ระย้าหัวใจ";
            $obj->save();
        }

        $obj = GoldPattern::where("id",19)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ลงยา";
            $obj->save();
        }

        $obj = GoldPattern::where("id",20)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "หัวใจคั่นปล้อง";
            $obj->save();
        }

        $obj = GoldPattern::where("id",21)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "สุโขทัย";
            $obj->save();
        }

        $obj = GoldPattern::where("id",22)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "หยดนำ้";
            $obj->save();
        }

        $obj = GoldPattern::where("id",23)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "อิตาลีคั่นโอ่ง";
            $obj->save();
        }

        $obj = GoldPattern::where("id",24)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ข้าวโพด";
            $obj->save();
        }

        $obj = GoldPattern::where("id",25)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "เปียถัก";
            $obj->save();
        }

        $obj = GoldPattern::where("id",26)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ปะคำ";
            $obj->save();
        }

        $obj = GoldPattern::where("id",27)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ทาโร่";
            $obj->save();
        }

        $obj = GoldPattern::where("id",28)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ปล้องกลม";
            $obj->save();
        }

        $obj = GoldPattern::where("id",29)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "อินฟินิตี้";
            $obj->save();
        }

        $obj = GoldPattern::where("id",30)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "หกเสา";
            $obj->save();
        }

        $obj = GoldPattern::where("id",31)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ดอกรักระย้า";
            $obj->save();
        }

        $obj = GoldPattern::where("id",32)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "ระย้าตะกร้อ";
            $obj->save();
        }

        $obj = GoldPattern::where("id",33)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "เบนซ์";
            $obj->save();
        }
    }
}
