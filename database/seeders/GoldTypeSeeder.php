<?php

namespace Database\Seeders;

use App\Models\GoldPattern;
use App\Models\GoldType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoldTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = GoldType::where("id", 1)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "แหวน";
            $obj->save();
        }

        $obj = GoldType::where("id", 2)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "สร้อยคอ";
            $obj->save();
        }

        $obj = GoldType::where("id", 3)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "สร้อยมือ";
            $obj->save();
        }

        $obj = GoldType::where("id", 4)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "กำไล";
            $obj->save();
        }

        $obj = GoldType::where("id", 5)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "จี้";
            $obj->save();
        }

        $obj = GoldType::where("id", 6)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "ต่างหู";
            $obj->save();
        }

        $obj = GoldType::where("id", 7)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "สร้อยข้อเท้าเด็ก";
            $obj->save();
        }

        $obj = GoldType::where("id", 8)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "ทองแท่ง";
            $obj->save();
        }

        $obj = GoldType::where("id", 9)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "สร้อยข้อเท้า";
            $obj->save();
        }

        $obj = GoldType::where("id", 10)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "พวงกุญแจ";
            $obj->save();
        }

        $obj = GoldType::where("id", 11)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "เข็มกลัดเนคไท";
            $obj->save();
        }
    }
}
