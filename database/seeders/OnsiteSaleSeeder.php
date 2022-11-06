<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\OnlineSale;
use App\Models\OnsiteSale;
use App\Models\Redemption;
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
        $obj = OnsiteSale::where("id", 1)->first(); //ซื้อสำเร็จ
        if (!$obj) {
            $obj = new OnsiteSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 100050;
            $obj->payment_method = "credit_card";
            $obj->credit_card_type = "VISA";
            $obj->bank_name = "กสิกร";
            $obj->save();

            $ins = Gold::where("id", 12)->first();
            $ins->onsiteSales()->save($obj);

            $ins = GoldPrice::where("id", 1)->first();
            $ins->onsiteSales()->save($obj);

            $ins = Employee::where("id", 1)->first();
            $ins->onsiteSales()->save($obj);

            $ins = User::where("id", 15)->first();
            $ins->onsiteSales()->save($obj);
        }

        $obj = OnsiteSale::where("id", 2)->first(); //โอนไม่สำเร็จ
        if (!$obj) {
            $obj = new OnsiteSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 63700;
            $obj->payment_method = "transfer";
            $obj->slip_image = "photo";
            $obj->transfer_status = "มีปัญหา";
            $obj->transfer_note = "ยอดไม่ตรง";
            $obj->save();

            $ins = Gold::where("id", 13)->first();
            $ins->onsiteSales()->save($obj);

            $ins = GoldPrice::where("id", 1)->first();
            $ins->onsiteSales()->save($obj);

            $ins = Employee::where("id", 4)->first();
            $ins->onsiteSales()->save($obj);

            $ins = User::where("id", 14)->first();
            $ins->onsiteSales()->save($obj);
        }

        $obj = OnsiteSale::where("id", 3)->first(); //โอนสำเร็จ
        if (!$obj) {
            $obj = new OnsiteSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 63700;
            $obj->payment_method = "transfer";
            $obj->slip_image = "photo";
            $obj->transfer_status = "ยืนยัน";
            $obj->is_cancel_bill = true;
            $obj->save();

            $ins = Gold::where("id", 13)->first();
            $ins->onsiteSales()->save($obj);

            $ins = GoldPrice::where("id", 1)->first();
            $ins->onsiteSales()->save($obj);

            $ins = Employee::where("id", 6)->first();
            $ins->onsiteSales()->save($obj);

            $ins = User::where("id", 13)->first();
            $ins->onsiteSales()->save($obj);
        }

        $obj = OnsiteSale::where("id", 4)->first(); //เงินสด
        if (!$obj) {
            $obj = new OnsiteSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 15950;
            $obj->payment_method = "cash";
            $obj->paid_amount = 20000;
            $obj->paid_change = 4050;
            $obj->save();

            $ins = Gold::where("id", 27)->first();
            $ins->onsiteSales()->save($obj);

            $ins = GoldPrice::where("id", 3)->first();
            $ins->onsiteSales()->save($obj);

            $ins = Employee::where("id", 6)->first();
            $ins->onsiteSales()->save($obj);

            $ins = User::where("id", 13)->first();
            $ins->onsiteSales()->save($obj);
        }

        $obj = OnsiteSale::where("id", 5)->first(); //เปลี่ยน
        if (!$obj) {
            $obj = new OnsiteSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 97050;
            $obj->payment_method = "cash";
            $obj->paid_amount = 20000;
            $obj->paid_change = 4050;
            $obj->is_switch_gold = 1;
            $obj->save();

            $ins = Gold::where("id", 5)->first();
            $ins->onsiteSales()->save($obj);

            $ins = GoldPrice::where("id", 3)->first();
            $ins->onsiteSales()->save($obj);

            $ins = Employee::where("id", 5)->first();
            $ins->onsiteSales()->save($obj);

            $ins = User::where("id", 14)->first();
            $ins->onsiteSales()->save($obj);

            $ins = Redemption::where("id", 3)->first();
            $ins->onsiteSales()->save($obj);
        }
    }
}
