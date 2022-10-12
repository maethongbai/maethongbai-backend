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
        $obj = CustomOrder::where("id", 1)->first(); //รับเรื่อง โอน->ยังไม่ได้ตรวจสอบ(มัดจำ)
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "สร้อยคอมังกร 1 บาท";
            $obj->type = "สร้อยคอมังกรเต็มตัว 1 บาท เน้นหัวมังกร";
            $obj->weight = 15.16;
            $obj->wage = 3000;
            $obj->full_price = 33600;
            $obj->deposit_total_amount = 3024;
            $obj->difference_amount = 30576;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->finish_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->deposit_payment_method = "transfer";
            $obj->deposit_slip_image = "photo";
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

        $obj = CustomOrder::where("id", 2)->first(); //กำลังผลิต เงินสด(มัดจำ)
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "สร้อยมือพิกุล 1 บาท";
            $obj->type = "สร้อยมือพิกุล 1 บาท พิกุลรอบวง";
            $obj->weight = 15.16;
            $obj->wage = 2000;
            $obj->full_price = 32800;
            $obj->deposit_total_amount = 2952;
            $obj->difference_amount = 29848;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->finish_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->deposit_payment_method = "cash";
            $obj->deposit_paid_amount = 3000;
            $obj->deposit_change_amount = 48;
            $obj->custom_order_status = "กำลังผลิต";
            $obj->save();

            $ins = CustomOrderWorker::where("id", 2)->first();
            $ins->customOrders()->save($obj);

            $ins = GoldPrice::where("id", 2)->first();
            $ins->customOrders()->save($obj);

            $ins = User::where("id", 10)->first();
            $ins->customOrders()->save($obj);

            $ins = Employee::where("id", 2)->first();
            $ins->customOrders()->save($obj);
        }

        $obj = CustomOrder::where("id", 3)->first();//เสร็จสิ้น credit card(มัดจำ) ลูกค้ายังไม่มารับ
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "แหวนนามสกุล 1 บาท";
            $obj->type = "แหวนนามสกุล 1 บาท สลักนามสกุล=> Long";
            $obj->weight = 15.16;
            $obj->wage = 2800;
            $obj->full_price = 33400;
            $obj->deposit_total_amount = 2672;
            $obj->difference_amount = 30728;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->finish_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->deposit_payment_method = "credit card";
            $obj->deposit_credit_card_type = "VISA";
            $obj->deposit_bank_name = "กสิกร";
            $obj->custom_order_status = "เสร็จสิ้น";
            $obj->save();

            $ins = CustomOrderWorker::where("id", 3)->first();
            $ins->customOrders()->save($obj);

            $ins = GoldPrice::where("id", 1)->first();
            $ins->customOrders()->save($obj);

            $ins = User::where("id", 11)->first();
            $ins->customOrders()->save($obj);

            $ins = Employee::where("id", 1)->first();
            $ins->customOrders()->save($obj);
        }

        $obj = CustomOrder::where("id", 4)->first();//รับเรื่อง transfer->ผ่านการตรวจสอบ(มัดจำ)
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "สร้อยมือลงยา 2 บาท";
            $obj->type = "สร้อยมือลงยา 2 บาท โป่งรูปแบบเป็นนพเก้า";
            $obj->weight = 30.32;
            $obj->wage = 3000;
            $obj->full_price = 61800;
            $obj->deposit_total_amount = 5562;
            $obj->difference_amount = 56238;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->finish_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->deposit_payment_method = "transfer";
            $obj->deposit_slip_image = "photo";
            $obj->deposit_status = "ผ่านการตรวจสอบ";
            $obj->save();

            $ins = CustomOrderWorker::where("id", 4)->first();
            $ins->customOrders()->save($obj);

            $ins = GoldPrice::where("id", 3)->first();
            $ins->customOrders()->save($obj);

            $ins = User::where("id", 12)->first();
            $ins->customOrders()->save($obj);

            $ins = Employee::where("id", 3)->first();
            $ins->customOrders()->save($obj);
        }

        $obj = CustomOrder::where("id", 5)->first();//รับเรื่อง transfer->ไม่ผ่านการตรวจสอบ(มัดจำ)
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "แหวนปอกมีด 1 บาท";
            $obj->type = "แหวนปอกมีกสลักชือ สลัก=>Taylor";
            $obj->weight = 15.16;
            $obj->wage = 3000;
            $obj->full_price = 35550;
            $obj->deposit_total_amount = 2844;
            $obj->difference_amount = 32706;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->finish_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->deposit_payment_method = "transfer";
            $obj->deposit_slip_image = "photo";
            $obj->deposit_status = "ไม่ผ่านการตรวจสอบ";
            $obj->deposit_note = "ยอดสลิปไม่ตรง";
            $obj->save();

            $ins = CustomOrderWorker::where("id", 5)->first();
            $ins->customOrders()->save($obj);

            $ins = GoldPrice::where("id", 4)->first();
            $ins->customOrders()->save($obj);

            $ins = User::where("id", 13)->first();
            $ins->customOrders()->save($obj);

            $ins = Employee::where("id", 4)->first();
            $ins->customOrders()->save($obj);
        }

        $obj = CustomOrder::where("id", 6)->first();//เสร็จสิ้น cash(มัดจำ) ลูกค้ารับของแล้ว transfer(ส่วนต่าง)
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "สร้อยคอพิกุล 3 บาท";
            $obj->type = "สร้อยคอพิกุล 3 บาท พิกุลล้อมรอบ";
            $obj->weight = 45.48;
            $obj->wage = 3500;
            $obj->full_price = 94430;
            $obj->deposit_total_amount = 9443;
            $obj->difference_amount = 84987;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->finish_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->deposit_payment_method = "cash";
            $obj->deposit_paid_amount = 9500;
            $obj->deposit_change_amount = 57;
            $obj->custom_order_status = "เสร็จสิ้น";
            $obj->delivery_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->difference_payment_method = "transfer";
            $obj->difference_slip_image = "photo";
            $obj->difference_status = "ผ่านการตรวจสอบ";

            $obj->save();

            $ins = CustomOrderWorker::where("id", 6)->first();
            $ins->customOrders()->save($obj);

            $ins = GoldPrice::where("id", 5)->first();
            $ins->customOrders()->save($obj);

            $ins = User::where("id", 14)->first();
            $ins->customOrders()->save($obj);

            $ins = Employee::where("id", 5)->first();
            $ins->customOrders()->save($obj);
        }

        $obj = CustomOrder::where("id", 7)->first();//เสร็จสิ้น transfer(มัดจำ) โอนส่วนต่างไม่ผ่านลูกค้ารับของไม่ได้
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "แหวนมังกร 1 บาท";
            $obj->type = "แหวนมังกร 1 บาท เน้นหัวมังกร";
            $obj->weight = 15.16;
            $obj->wage = 4000;
            $obj->full_price = 34800;
            $obj->deposit_total_amount = 2784;
            $obj->difference_amount = 32016;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->finish_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->deposit_payment_method = "transfer";
            $obj->deposit_slip_image = "photo";
            $obj->deposit_status = "ผ่านการตรวจสอบ";
            $obj->custom_order_status = "เสร็จสิ้น";
            $obj->difference_payment_method = "transfer";
            $obj->difference_slip_image = "photo";
            $obj->difference_status = "ไม่ผ่านการตรวจสอบ";
            $obj->difference_note = "ยอดสลิปไม่ตรง";

            $obj->save();

            $ins = CustomOrderWorker::where("id", 3)->first();
            $ins->customOrders()->save($obj);

            $ins = GoldPrice::where("id", 2)->first();
            $ins->customOrders()->save($obj);

            $ins = User::where("id", 1)->first();
            $ins->customOrders()->save($obj);

            $ins = Employee::where("id", 6)->first();
            $ins->customOrders()->save($obj);
        }

        $obj = CustomOrder::where("id", 8)->first();//เสร็จสิ้น cash(มัดจำ) ลูกค้ารับของแล้ว credit(ส่วนต่าง)
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "สร้อยคอพิกุล 3 บาท";
            $obj->type = "สร้อยคอพิกุล 3 บาท พิกุลแค่ด้านหน้า";
            $obj->weight = 45.48;
            $obj->wage = 3500;
            $obj->full_price = 94430;
            $obj->deposit_total_amount = 9443;
            $obj->difference_amount = 84987;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->finish_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->deposit_payment_method = "cash";
            $obj->deposit_paid_amount = 9500;
            $obj->deposit_change_amount = 57;
            $obj->custom_order_status = "เสร็จสิ้น";
            $obj->delivery_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->difference_payment_method = "credit card";
            $obj->difference_credit_card_type = "VISA";
            $obj->difference_bank_name = "กสิกร";

            $obj->save();

            $ins = CustomOrderWorker::where("id", 6)->first();
            $ins->customOrders()->save($obj);

            $ins = GoldPrice::where("id", 5)->first();
            $ins->customOrders()->save($obj);

            $ins = User::where("id", 12)->first();
            $ins->customOrders()->save($obj);

            $ins = Employee::where("id", 5)->first();
            $ins->customOrders()->save($obj);
        }

        $obj = CustomOrder::where("id", 9)->first();//กำลังผลิต cash(มัดจำ)
        if (!$obj) {
            $obj = new CustomOrder();
            $obj->name = "จี้พญานาค 3 บาท";
            $obj->type = "จี้พญานาค 3 บาท";
            $obj->weight = 45.48;
            $obj->wage = 3500;
            $obj->full_price = 94430;
            $obj->deposit_total_amount = 9443;
            $obj->difference_amount = 84987;
            $obj->order_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->finish_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->deposit_payment_method = "cash";
            $obj->deposit_paid_amount = 9500;
            $obj->deposit_change_amount = 57;
            $obj->custom_order_status = "กำลังผลิต";

            $obj->save();

            $ins = CustomOrderWorker::where("id", 6)->first();
            $ins->customOrders()->save($obj);

            $ins = GoldPrice::where("id", 5)->first();
            $ins->customOrders()->save($obj);

            $ins = User::where("id", 12)->first();
            $ins->customOrders()->save($obj);

            $ins = Employee::where("id", 5)->first();
            $ins->customOrders()->save($obj);
        }
    }
}
