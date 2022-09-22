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
            $obj->name = "test_wholesale";
            $obj->phone = "0800000001";
            $obj->address = "test_wholesale_address";
            $obj->save();
        }
    }
}
