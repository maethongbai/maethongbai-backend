<?php

namespace Database\Seeders;

use App\Models\CustomOrder;
use App\Models\CustomOrderWorker;
use App\Models\Employee;
use App\Models\GoldPrice;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = CustomOrder::where("id", 1)->first();
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "custom order name";
            $obj->type = "order type (ลักษณะ)";
            $obj->weight = "1 baht";
            $obj->wage = 10000;
            $obj->full_price = 50000;
            $obj->deposit_total_amount = 5000;
            $obj->difference_amount = 3000;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->delivery_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->save();

            $ins = CustomOrderWorker::where("id", 1)->first();
            $ins->customOrders()->save($obj);

            $ins = GoldPrice::where("id", 1)->first();
            $ins->customOrders()->save($obj);

            $ins = User::where("id", 1)->first();
            $ins->customOrders()->save($obj);

            $ins = Employee::where("id", 1)->first();
            $ins->customOrders()->save($obj);
        }
    }
}
