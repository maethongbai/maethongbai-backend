<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\OnlineSale;
use App\Models\OnsiteSale;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OnsiteSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = OnsiteSale::where("id", 1)->first();
        if (!$obj) {
            $obj = new OnsiteSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 20000;
            $obj->save();

            $ins = Gold::where("id", 1)->first();
            $ins->onsiteSales()->save($obj);

            $ins = GoldPrice::where("id", 1)->first();
            $ins->onsiteSales()->save($obj);

            $ins = Employee::where("id", 1)->first();
            $ins->onsiteSales()->save($obj);

            $ins = User::where("id", 1)->first();
            $ins->onsiteSales()->save($obj);
        }
    }
}
