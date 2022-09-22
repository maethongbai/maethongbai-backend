<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\OnlineSale;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OnlineSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = OnlineSale::where("id",1)->first();
        if (!$obj) {
            $obj = new OnlineSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 20000;
            $obj->slip_image = "not yet";
            $obj->amount = 5;
            $obj->save();

            $ins = Gold::where("id",1)->first();
            $ins->onlineSales()->save($obj);

            $ins = GoldPrice::where("id",1)->first();
            $ins->onlineSales()->save($obj);

            $ins = Employee::where("id",1)->first();
            $ins->onlineSaleTrackingIDs()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->onlineSaleDeliveryStatuses()->save($obj);

            $ins = User::where("id",1)->first();
            $ins->onlineSales()->save($obj);
        }
    }
}
