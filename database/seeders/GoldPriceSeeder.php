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
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 30500;
            $obj->sell_price = 30600;
            $obj->save();
        }

        $obj = GoldPrice::where("id",2)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 30700;
            $obj->sell_price = 30800;
            $obj->save();
        }

        $obj = GoldPrice::where("id",3)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 29300;
            $obj->sell_price = 29400;
            $obj->save();
        }

        $obj = GoldPrice::where("id",4)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 32450;
            $obj->sell_price = 32550;
            $obj->save();
        }

        $obj = GoldPrice::where("id",5)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 30210;
            $obj->sell_price = 30310;
            $obj->save();
        }

        $obj = GoldPrice::where("id",6)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 29000;
            $obj->sell_price = 29100;
            $obj->save();
        }

        $obj = GoldPrice::where("id",7)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 30550;
            $obj->sell_price = 30650;
            $obj->save();
        }

        $obj = GoldPrice::where("id",8)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 31100;
            $obj->sell_price = 31200;
            $obj->save();
        }

        $obj = GoldPrice::where("id",9)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 32150;
            $obj->sell_price = 32250;
            $obj->save();
        }

        $obj = GoldPrice::where("id",10)->first();
        if (!$obj) {
            $obj = new GoldPrice();
            $obj->datetime = fake()->dateTimeBetween('-10 years')->format('Y-m-d H:i:s');
            $obj->buy_price = 30900;
            $obj->sell_price = 31000;
            $obj->save();
        }
    }
}
