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
            $obj->redemption_price = 28815;
            $obj->id_card_image = "not set";
            $obj->check_status = "ผ่านการตรวจสอบ";
            $obj->save();

            $ins = Gold::where("id",16)->first();
            $ins->redemptions()->save($obj);

            $ins = GoldPrice::where("id",1)->first();
            $ins->redemptions()->save($obj);

            $ins = Employee::where("id",3)->first();
            $ins->redemptions()->save($obj);

            $ins = User::where("id",11)->first();
            $ins->redemptions()->save($obj);
        }

        $obj = Redemption::where("id",2)->first();//รอตรวจสอบ
        if (!$obj) {
            $obj = new Redemption();
            $obj->redemption_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->redemption_price = 28805;
            $obj->id_card_image = "not set";
            $obj->save();

            $ins = Gold::where("id",17)->first();
            $ins->redemptions()->save($obj);

            $ins = GoldPrice::where("id",2)->first();
            $ins->redemptions()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->redemptions()->save($obj);

            $ins = User::where("id",15)->first();
            $ins->redemptions()->save($obj);
        }

        $obj = Redemption::where("id",3)->first();
        if (!$obj) {
            $obj = new Redemption();
            $obj->redemption_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->redemption_price = 58008;
            $obj->id_card_image = "not set";
            $obj->check_status = "ผ่านการตรวจสอบ";
            $obj->save();

            $ins = Gold::where("id",18)->first();
            $ins->redemptions()->save($obj);

            $ins = GoldPrice::where("id",2)->first();
            $ins->redemptions()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->redemptions()->save($obj);

            $ins = User::where("id",12)->first();
            $ins->redemptions()->save($obj);
        }

        $obj = Redemption::where("id",4)->first();
        if (!$obj) {
            $obj = new Redemption();
            $obj->redemption_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->redemption_price = 57631;
            $obj->id_card_image = "not set";
            $obj->check_status = "ไม่ผ่านการตรวจสอบ";
            $obj->note = "ทองปลอม";
            $obj->save();

            $ins = Gold::where("id",19)->first();
            $ins->redemptions()->save($obj);

            $ins = GoldPrice::where("id",1)->first();
            $ins->redemptions()->save($obj);

            $ins = Employee::where("id",6)->first();
            $ins->redemptions()->save($obj);

            $ins = User::where("id",13)->first();
            $ins->redemptions()->save($obj);
        }

        $obj = Redemption::where("id",5)->first();//รอยืนยัน
        if (!$obj) {
            $obj = new Redemption();
            $obj->redemption_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->redemption_price = 27681;
            $obj->id_card_image = "not set";
            $obj->save();

            $ins = Gold::where("id",20)->first();
            $ins->redemptions()->save($obj);

            $ins = GoldPrice::where("id",3)->first();
            $ins->redemptions()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->redemptions()->save($obj);

            $ins = User::where("id",13)->first();
            $ins->redemptions()->save($obj);
        }

    }
}
