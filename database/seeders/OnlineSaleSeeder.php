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
        $obj = OnlineSale::where("id",1)->first();//ซื้อ สำเร็จ ส่งของ เรียบร้อย
        if (!$obj) {
            $obj = new OnlineSale();
            $obj->sale_date = "2022-10-27";
            $obj->gold_price = 45000;
            $obj->transfer_status = "ยืนยัน";
            $obj->additional_note = "ห่อของขวัญ";
            $obj->delivery_status = "จัดส่งสำเร็จ";
            $obj->tracking_number = "bcv123";
            $obj->slip_image = "not yet";
            $obj->amount = 1;
            $obj->save();

            $ins = Gold::where("id",23)->first();
            $ins->onlineSales()->save($obj);

            $ins = GoldPrice::where("id",1)->first();
            $ins->onlineSales()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->onlineSaleTrackingIDs()->save($obj);

            $ins = Employee::where("id",1)->first();
            $ins->onlineSaleDeliveryStatuses()->save($obj);

            $ins = User::where("id",11)->first();
            $ins->onlineSales()->save($obj);
        }

        $obj = OnlineSale::where("id",2)->first();//ซื้อ ไม่สำเร็จ
        if (!$obj) {
            $obj = new OnlineSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 87050;
            $obj->slip_image = "not yet";
            $obj->transfer_status = "มีปัญหา";
            $obj->transfer_note  = "ยอดเงินไม่ตรง";
            $obj->note = "ลูกค้าโอนขาด";
            $obj->amount =  1;
            $obj->save();

            $ins = Gold::where("id",24)->first();
            $ins->onlineSales()->save($obj);

            $ins = GoldPrice::where("id",1)->first();
            $ins->onlineSales()->save($obj);

            $ins = User::where("id",7)->first();
            $ins->onlineSales()->save($obj);
        }

        $obj = OnlineSale::where("id",3)->first();//ซื้อ สำเร็จ ส่งของ เตรียม
        if (!$obj) {
            $obj = new OnlineSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 5100;
            $obj->slip_image = "not yet";
            $obj->transfer_status = "ยืนยัน";
            $obj->delivery_status = "เตรียม";
            $obj->amount =  1;
            $obj->save();

            $ins = Gold::where("id",25)->first();
            $ins->onlineSales()->save($obj);

            $ins = GoldPrice::where("id",2)->first();
            $ins->onlineSales()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->onlineSaleDeliveryStatuses()->save($obj);

            $ins = User::where("id",6)->first();
            $ins->onlineSales()->save($obj);
        }

        $obj = OnlineSale::where("id",4)->first();//ซื้อ สำเร็จ ส่งของ กำลังจัดส่ง
        if (!$obj) {
            $obj = new OnlineSale();
            $obj->sale_date = "2022-11-03";
            $obj->gold_price = 9450;
            $obj->slip_image = "not yet";
            $obj->transfer_status = "ยืนยัน";
            $obj->delivery_status = "กำลังจัดส่ง";
            $obj->tracking_number = "hssp223";
            $obj->note = "อย่าลืมของแถมลูกค้า";
            $obj->amount =  1;
            $obj->save();

            $ins = Gold::where("id",26)->first();
            $ins->onlineSales()->save($obj);

            $ins = GoldPrice::where("id",2)->first();
            $ins->onlineSales()->save($obj);

            $ins = Employee::where("id",6)->first();
            $ins->onlineSaleTrackingIDs()->save($obj);

            $ins = Employee::where("id",7)->first();
            $ins->onlineSaleDeliveryStatuses()->save($obj);

            $ins = User::where("id",12)->first();
            $ins->onlineSales()->save($obj);
        }

        $obj = OnlineSale::where("id",5)->first();//ซื้อ รอตรวจสอบ
        if (!$obj) {
            $obj = new OnlineSale();
            $obj->sale_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_price = 15950;
            $obj->slip_image = "not yet";
            $obj->amount =  1;
            $obj->save();

            $ins = Gold::where("id",27)->first();
            $ins->onlineSales()->save($obj);

            $ins = GoldPrice::where("id",3)->first();
            $ins->onlineSales()->save($obj);

            $ins = User::where("id",13)->first();
            $ins->onlineSales()->save($obj);
        }
    }
}
