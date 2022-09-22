<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\Redemption;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RedemptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = Redemption::where("id",1)->first();
        if (!$obj) {
            $obj = new Redemption();
            $obj->redemption_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->redemption_price = 20000;
            $obj->id_card_image = "not set";
            $obj->save();

            $ins = Gold::where("id",1)->first();
            $ins->redemptions()->save($obj);

            $ins = GoldPrice::where("id",1)->first();
            $ins->redemptions()->save($obj);

            $ins = Employee::where("id",1)->first();
            $ins->redemptions()->save($obj);

            $ins = User::where("id",1)->first();
            $ins->redemptions()->save($obj);
        }
    }
}
