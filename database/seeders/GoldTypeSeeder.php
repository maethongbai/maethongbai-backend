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
        $obj = GoldType::where("id",1)->first();
        if (!$obj) {
            $obj = new GoldType();
            $obj->name = "test type";
            $obj->save();
        }
    }
}
