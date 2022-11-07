<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPattern;
use App\Models\GoldPrice;
use App\Models\GoldType;
use App\Models\Wholesale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //รับจากร้านขายส่ง
        //stock นนปกติ รออนุมัติ
        $obj = Gold::where("id",1)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอระย้าหัวใจ 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "43";
            $obj->pension_per_piece = 250;
            $obj->import_date = "2022-10-27";
            $obj->gold_buy_price_wholesale = 28000;
            $obj->brand = null;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",18)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",2)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมึด ครึ่งสลึง";
            $obj->weight = "ครึ่งสลึง";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "58";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-10-27";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29000;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",3)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมึด ครึ่งสลึง";
            $obj->weight = "ครึ่งสลึง";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "58";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-10-27";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29000;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",4)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมึด ครึ่งสลึง";
            $obj->weight = "ครึ่งสลึง";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "58";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-10-27";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29000;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",5)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมึด ครึ่งสลึง";
            $obj->weight = "ครึ่งสลึง";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "58";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-10-27";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 28000;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",6)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือลงยา 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "48";
            $obj->pension_per_piece = 300;
            $obj->import_date = "2022-10-30";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 28500;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",19)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",11)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",6)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",7)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอคตกริช 3 บาท";
            $obj->weight = "3 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "53";
            $obj->pension_per_piece = 200;
            $obj->import_date = "2022-10-30";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29000;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",15)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",3)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",8)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอคตกริช 3 บาท";
            $obj->weight = "3 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "53";
            $obj->pension_per_piece = 200;
            $obj->import_date = "2022-10-30";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29000;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",15)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",3)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",9)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอคตกริช 3 บาท";
            $obj->weight = "3 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "53";
            $obj->pension_per_piece = 200;
            $obj->import_date = "2022-10-30";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29000;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",15)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",3)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",10)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอคตกริช 3 บาท";
            $obj->weight = "3 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "53";
            $obj->pension_per_piece = 200;
            $obj->import_date = "2022-10-30";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29000;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",15)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",3)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",11)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "จี้มิกกี้ 1 สลึง";
            $obj->weight = "1 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "15";
            $obj->pension_per_piece = 450;
            $obj->import_date = "2022-10-30";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 28500;
            $obj->save();

            $ins = GoldType::where("id",5)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",16)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",11)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",10)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",12)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือตุ้งติ้ง 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "48";
            $obj->pension_per_piece = 300;
            $obj->import_date = "2022-10-30";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29250;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",14)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",17)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",6)->first();
            $ins->golds()->save($obj);
        }
        $obj = Gold::where("id",13)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนอินฟินิตี 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "49";
            $obj->pension_per_piece = 450;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 27050;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",29)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",13)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",7)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",14)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยข้อเท้าเด็กปล้องกลม 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "14";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30350;
            $obj->save();

            $ins = GoldType::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",28)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",12)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",15)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยข้อเท้าเด็กปล้องกลม 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "14";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30350;
            $obj->save();

            $ins = GoldType::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",28)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",12)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",16)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยข้อเท้าเด็กปล้องกลม 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "14";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30350;
            $obj->save();

            $ins = GoldType::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",28)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",12)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",17)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยข้อเท้าเด็กปล้องกลม 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "14";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30350;
            $obj->save();

            $ins = GoldType::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",28)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",12)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",18)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยข้อเท้าเด็กปล้องกลม 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "14";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30350;
            $obj->save();

            $ins = GoldType::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",28)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",12)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",19)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยข้อเท้าเด็กปล้องกลม 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "14";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30350;
            $obj->save();

            $ins = GoldType::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",28)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",12)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",20)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยข้อเท้าเด็กปล้องกลม 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "14";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30350;
            $obj->save();

            $ins = GoldType::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",28)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",12)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",21)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "กำไลตะปู 4 บาท";
            $obj->weight = "4 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "55";
            $obj->pension_per_piece = 1500;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29050;
            $obj->save();

            $ins = GoldType::where("id",4)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",13)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",10)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",10)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",22)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือเปียถัก 14.33 กรัม";
            $obj->custom_weight = 14.33;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "30";
            $obj->pension_per_piece = 900;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30350;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",25)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",11)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",7)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",23)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอทาโร่ 16.33 กรัม";
            $obj->custom_weight = 16.33;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "45";
            $obj->pension_per_piece = 350;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29150;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",27)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",8)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",3)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",24)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคออิตาลีคั่นโอ่ง 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "35";
            $obj->pension_per_piece = 200;
            $obj->import_date = "2022-11-02";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 31350;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",23)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",6)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",25)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "ต่างหูหยดนำ้ 1 สลึง";
            $obj->weight = "1 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "8";
            $obj->pension_per_piece = 250;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 31450;
            $obj->save();

            $ins = GoldType::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",22)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",20)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอสุโขทัย 3 บาท";
            $obj->weight = "3 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "25";
            $obj->pension_per_piece = 600;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 280350;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",21)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",9)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",21)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือกระดูกงู 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "25";
            $obj->pension_per_piece = 350;
            $obj->import_date = "2022-11-01";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 28350;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",7)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",22)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือซีตรองคั่นปล้อง 14 กรัม";
            $obj->custom_weight = 14;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "34";
            $obj->pension_per_piece = 300;
            $obj->import_date = "2022-11-02";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 28150;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",8)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",14)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",23)->first(); //ขายออนไลน์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือซีตรอง 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "30";
            $obj->pension_per_piece = 300;
            $obj->import_date = "2022-11-03";
            $obj->brand = null;
            $obj->is_sold = true;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->gold_buy_price_wholesale = 27550;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",1)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",24)->first();//ขายออนไลน์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือกระดูกงู 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "25";
            $obj->pension_per_piece = 350;
            $obj->import_date = "2022-11-03";
            $obj->brand = null;
            $obj->is_sold = true;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->gold_buy_price_wholesale = 29350;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",5)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",25)->first();//ขายออนลไน์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอหัวใจคั่นปล้อง 3 บาท";
            $obj->weight = "3 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "30";
            $obj->pension_per_piece = 300;
            $obj->import_date = "2022-11-03";
            $obj->is_sold = true;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 28350;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",20)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",11)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",7)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",26)->first();//ขายออนลไน์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนดอกไม้ 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "48";
            $obj->pension_per_piece = 300;
            $obj->import_date = "2022-11-03";
            $obj->is_sold = true;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29000;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",11)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",15)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",27)->first();//ขายออนลไน์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนดอกไม้ 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "48";
            $obj->pension_per_piece = 300;
            $obj->import_date = "2022-11-03";
            $obj->is_sold = true;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29000;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",11)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",15)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",28)->first();//ขายออนไซต์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "พวงกุญแจเบนซ์ 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "14";
            $obj->pension_per_piece = 1000;
            $obj->import_date = "2022-11-03";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 27350;
            $obj->is_sold = true;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",10)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",33)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",29)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "พวงกุญแจเบนซ์ 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "14";
            $obj->pension_per_piece = 1000;
            $obj->import_date = "2022-11-03";
            $obj->brand = null;
            $obj->stock_approval_status = "ไม่อนุมัติ";
            $obj->gold_buy_price_wholesale = 27350;
            $obj->save();

            $ins = GoldType::where("id",10)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",33)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",30)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "กำไลลงยา 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "30";
            $obj->pension_per_piece = 1000;
            $obj->import_date = "2022-11-03";
            $obj->brand = null;
            $obj->stock_approval_status = "ไม่อนุมัติ";
            $obj->gold_buy_price_wholesale = 28350;
            $obj->save();

            $ins = GoldType::where("id",4)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",19)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",6)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",31)->first();//ขายออนไซต์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือกระดูกงู 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "25";
            $obj->pension_per_piece = 350;
            $obj->import_date = "2022-11-03";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 28350;
            $obj->is_sold = true;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",7)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",32)->first();
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือกระดูกงู 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "25";
            $obj->pension_per_piece = 350;
            $obj->import_date = "2022-11-04";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 28350;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",7)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",33)->first();//ขายออนไซต์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือกระดูกงู 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "25";
            $obj->pension_per_piece = 350;
            $obj->import_date = "2022-11-04";
            $obj->brand = null;
            $obj->is_sold = true;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->gold_buy_price_wholesale = 28350;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",7)->first();
            $ins->golds()->save($obj);
        }


        $obj = Gold::where("id",34)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอคตกริช 1 บาท";
            $obj->custom_weight = 15.16;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "45";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-10-24";
            $obj->brand = "ชมพู";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",15)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",36)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมีด 1 บาท";
            $obj->custom_weight = 15.16;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "52";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-10-24";
            $obj->brand = "ลายกนก";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",37)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอดิสโก้ 2 บาท";
            $obj->custom_weight = 30.32;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "50";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-10-28";
            $obj->brand = "บ้านช่างทอง";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",5)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",38)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือตุ้งติ้ง 2 บาท";
            $obj->custom_weight = 30.32;
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "25";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-11-01";
            $obj->brand = "จินไท้เฮง";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",14)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",39)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอซีตรองคั่นปล้อง 1 บาท";
            $obj->custom_weight = 15.30 ;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "53";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-11-01";
            $obj->brand = "โต๊ะกัง";
            $obj->image = "no image, will set up later";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",8)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",40)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมีด 1 บาท";
            $obj->custom_weight = 15.30 ;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "60";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-11-01";
            $obj->brand = "ลายกนก";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",41)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมีด 2 สลึง";
            $obj->custom_weight = 7.58;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "50";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-11-03";
            $obj->brand = "วิทเฮงหลี";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",42)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "จี้หัวใจ 1 สลึง";
            $obj->custom_weight = 3.79;
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "3";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-11-04";
            $obj->brand = "ชมพู";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",5)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",12)->first();
            $ins->golds()->save($obj);



        }

        $obj = Gold::where("id",43)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "ทองแท่ง 1 บาท";
            $obj->custom_weight = 15.16;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "3";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-11-04";
            $obj->brand = "ชมพู";
            $obj->image = "no image, will set up later";
            $obj->percentage = "96.5% ทองแท่ง";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",8)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",44)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "ทองแท่ง 1 บาท";
            $obj->custom_weight = 15.16;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "3";
            $obj->pension_per_piece = null;
            $obj->import_date = "2022-11-04";
            $obj->brand = "ชมพู";
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->percentage = "96.5% ทองแท่ง";
            $obj->is_redemption = true;
            $obj->save();

            $ins = GoldType::where("id",8)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",45)->first();//จากร้านขายส่ง อนุมัติ นนตามชั่ง ขายออนไซต์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนมิกกี้";
            $obj->custom_weight = 15.27;
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "52";
            $obj->pension_per_piece = 2000;
            $obj->import_date = "2022-11-04";
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 31100;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->is_sold = true;
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",16)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",46)->first();//จากร้านขายส่ง อนุมัติ ขายออนไซต์
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนตัดเหลี่ยม 2 สลึง";
            $obj->custom_weight = 7.58;
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "54";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-11-04";
            $obj->brand = null;
            $obj->is_sold = true;
            $obj->gold_buy_price_wholesale = 29150;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",10)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",1)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",47)->first();//จากร้านขายส่ง อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนตัดเหลี่ยม 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "54";
            $obj->pension_per_piece = 150;
            $obj->import_date = "2022-11-04";
            $obj->brand = null;
            $obj->is_sold = true;
            $obj->gold_buy_price_wholesale = 25000;
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",10)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",1)->first();
            $ins->golds()->save($obj);

        }


    }

}
