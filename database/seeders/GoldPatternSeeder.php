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
            $obj->name = "คตกรีด";
            $obj->save();
        }

        $obj = GoldPattern::where("id",16)->first();
        if (!$obj) {
            $obj = new GoldPattern();
            $obj->name = "มิกกี้";
            $obj->save();
        }
    }
}
