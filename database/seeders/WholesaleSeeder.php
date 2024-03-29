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

        $obj = Wholesale::where("id",10)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "ทองสวย";
            $obj->phone = "0286003641";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",11)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "จิ้นไถ่เฮง";
            $obj->phone = "0286033741";
            $obj->address = "เยาวราช,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",12)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "มาสเตอร์";
            $obj->phone = "0216003741";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",13)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "ฮะเฮง";
            $obj->phone = "0286013741";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",14)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "สิริการ";
            $obj->phone = "0286203741";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",15)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "โต๊ะกัง";
            $obj->phone = "0286103741";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",16)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "เฮงหลี";
            $obj->phone = "0286023741";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",17)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "ราขา";
            $obj->phone = "0286013741";
            $obj->address = "เยาวราย,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",18)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "";
            $obj->phone = "0286003741";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",19)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "";
            $obj->phone = "0286003741";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

        $obj = Wholesale::where("id",20)->first();
        if (!$obj) {
            $obj = new Wholesale();
            $obj->name = "";
            $obj->phone = "0286003741";
            $obj->address = "พระนคร,กรุงเทพ";
            $obj->save();
        }

    }
}
