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
            $obj->name = "test pattern";
            $obj->save();
        }
    }
}
