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
            $obj->redemption_price = 24000;
            $obj->sell_price = 26000;
            $obj->save();
        }
    }
}
