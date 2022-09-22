<?php

namespace Database\Seeders;

use App\Models\Gold;
use App\Models\GoldPattern;
use App\Models\GoldPrice;
use App\Models\GoldType;
use App\Models\Wholesale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = Gold::where("id",1)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "test gold";
            $obj->weight = "1 baht";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "1cm";
            $obj->pension_per_piece = 500;
            $obj->amount = 5;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "Corona";
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPrice::where("id",1)->first();
            $ins->golds()->save($obj);


        }
    }
}
