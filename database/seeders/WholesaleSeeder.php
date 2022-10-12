<?php

namespace Database\Seeders;

use App\Models\Wholesale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WholesaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = Wholesale::where("id",1)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "ชมพู";
            $obj->phone = "0217635542";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",2)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "ลายกนก";
            $obj->phone = "0273645326";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",3)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "จิบฮุย";
            $obj->phone = "0273563746";
            $obj->address = "พาหุรัด,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",4)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "วิทเฮงหลี";
            $obj->phone = "0220383725";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",5)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "พุดเซ้ง";
            $obj->phone = "0273645326";
            $obj->address = "วังบูรพาภิรมย์,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",6)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "เล่งหงษ์";
            $obj->phone = "0273546253";
            $obj->address = "เยาวราช,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",7)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "จูเจียบเซ้ง";
            $obj->phone = "0282790887";
            $obj->address = "เจริญกรุง,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",8)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "แต้จิ้นเส็ง";
            $obj->phone = "0287996857";
            $obj->address = "เจริญกรุง,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",9)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "โกลด์สยาม";
            $obj->phone = "0286003741";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }
    }
}
