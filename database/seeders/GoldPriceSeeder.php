<?php

namespace Database\Seeders;

use App\Models\GoldPrice;
use App\Models\Wholesale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoldPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $obj = GoldPrice::where("id",1)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-01 09:30:45";
            $obj->buy_price = 30500;
            $obj->sell_price = 30600;
            $obj->save();
        }

        $obj = GoldPrice::where("id",2)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-01 12:23:55";
            $obj->buy_price = 30700;
            $obj->sell_price = 30800;
            $obj->save();
        }

        $obj = GoldPrice::where("id",3)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-01 14:08:02";
            $obj->buy_price = 29300;
            $obj->sell_price = 29400;
            $obj->save();
        }

        $obj = GoldPrice::where("id",4)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-01 15:12:05";
            $obj->buy_price = 32450;
            $obj->sell_price = 32550;
            $obj->save();
        }

        $obj = GoldPrice::where("id",5)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-02 10:08:22";
            $obj->buy_price = 30210;
            $obj->sell_price = 30310;
            $obj->save();
        }

        $obj = GoldPrice::where("id",6)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-02 13:18:22";
            $obj->buy_price = 29000;
            $obj->sell_price = 29100;
            $obj->save();
        }

        $obj = GoldPrice::where("id",7)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-03 12:28:21";
            $obj->buy_price = 30550;
            $obj->sell_price = 30650;
            $obj->save();
        }

        $obj = GoldPrice::where("id",8)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-03 14:55:03";
            $obj->buy_price = 31100;
            $obj->sell_price = 31200;
            $obj->save();
        }

        $obj = GoldPrice::where("id",9)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-04 11:15:13";
            $obj->buy_price = 32150;
            $obj->sell_price = 32250;
            $obj->save();
        }

        $obj = GoldPrice::where("id",10)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-04 13:22:33";
            $obj->buy_price = 30900;
            $obj->sell_price = 31000;
            $obj->save();
        }

        $obj = GoldPrice::where("id",11)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-05 12:23:23";
            $obj->buy_price = 29900;
            $obj->sell_price = 30900;
            $obj->save();
        }

        $obj = GoldPrice::where("id",12)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-05 14:13:03";
            $obj->buy_price = 31900;
            $obj->sell_price = 32900;
            $obj->save();
        }

        $obj = GoldPrice::where("id",13)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-05 15:10:13";
            $obj->buy_price = 28000;
            $obj->sell_price = 29000;
            $obj->save();
        }

        $obj = GoldPrice::where("id",14)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-06 09:11:23";
            $obj->buy_price = 30000;
            $obj->sell_price = 31000;
            $obj->save();
        }

        $obj = GoldPrice::where("id",15)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-06 14:10:21";
            $obj->buy_price = 28150;
            $obj->sell_price = 29150;
            $obj->save();
        }

        $obj = GoldPrice::where("id",16)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = "2022-11-06 15:11:01";
            $obj->buy_price = 29110;
            $obj->sell_price = 30110;
            $obj->save();
        }
    }
}
