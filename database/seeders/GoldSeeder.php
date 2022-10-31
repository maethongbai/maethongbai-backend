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
        $obj = Gold::where("id",1)->first();//จากร้านขายส่ง ยังไม่อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอซีตรอง 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "43cm";
            $obj->pension_per_piece = 250;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->gold_buy_price_wholesale = 28000;
            $obj->brand = null;
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",3)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",2)->first();//จากร้านขายส่ง ไม่อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมึดครึ่งสลึง";
            $obj->weight = "ครึ่งสลึง";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "58";
            $obj->pension_per_piece = 100;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->image = "no image, will set up later";
            $obj->gold_buy_price_wholesale = 31000;
            $obj->stock_approval_status = "ไม่อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",3)->first();//จากร้านขายส่ง อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือโซ่ฝรั่ง 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "19cm";
            $obj->pension_per_piece = 350;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30000;
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",4)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",4)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",4)->first();//จากร้านขายส่ง ยังไม่อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "กำไลตะปู 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "20cm";
            $obj->pension_per_piece = 500;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 32000;
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",4)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",13)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",4)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",5)->first();//จากร้านขายส่ง อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอสี่เสา 3 บาท";
            $obj->weight = "3 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "60cm";
            $obj->pension_per_piece = 250;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30500;
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",7)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",6)->first();//จากร้านขายส่ง อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "จี้หัวใจ 5 หุน";
            $obj->weight = "5 หุน";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "5cm";
            $obj->pension_per_piece = 150;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29500;
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",5)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",12)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",7)->first();//จากร้านขายส่ง อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "ต่างหูดอกไม้ 1 สลึง";
            $obj->weight = "1 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "3cm";
            $obj->pension_per_piece = 250;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 30000;
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",11)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",5)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",6)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",8)->first();//จากร้านขายส่ง ไม่อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยข้อเท้าเด็กซีตรอง 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "8cm";
            $obj->pension_per_piece = 150;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 31550;
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "ไม่อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",6)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",9)->first();//จากร้านขายส่ง ยังไม่อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อบคอกระดูกงู 5 บาท";
            $obj->weight = "5 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "50cm";
            $obj->pension_per_piece = 200;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 31050;
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",7)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",8)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",2)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",10)->first();//จากร้านขายส่ง ยังไม่อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือบิดนูน 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "23cm";
            $obj->pension_per_piece = 280;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 28350;
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",4)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",3)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",11)->first();//จากร้านขายส่ง อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนตัดเหลี่ยม 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "54";
            $obj->pension_per_piece = 150;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29150;
            $obj->image = "no image, will set up later";
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

        $obj = Gold::where("id",12)->first();//จากร้านขายส่ง อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "กำไลตุ้งติ้ง 3 บาท";
            $obj->weight = "3 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "25cm";
            $obj->pension_per_piece = 450;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 31250;
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",4)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",14)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",9)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",6)->first();
            $ins->golds()->save($obj);



        }

        $obj = Gold::where("id",13)->first();//จากร้านขายส่ง อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือคตกริต 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "24cm";
            $obj->pension_per_piece = 150;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 29850;
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",15)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",4)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",5)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",14)->first();//จากร้านขายส่ง ยังไม่อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือคตกริต 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "20cm";
            $obj->pension_per_piece = 150;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 31360;
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",15)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",4)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",1)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",15)->first();//จากร้านขายส่ง อนุมัติ
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมึด 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "58";
            $obj->pension_per_piece = 100;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 31100;
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = Wholesale::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = Employee::where("id",3)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",16)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอคตกรีด 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "45cm";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "ชมพู";
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",15)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",17)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมีด 1 บาท";
            $obj->custom_weight = 15.16;
            $obj->pattern_type = "ทองตัน";
            $obj->size = "52";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "ลายกนก";
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",18)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอดิสโก้ 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "50cm";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "บ้านช่างทอง";
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",5)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",19)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยมือตุ้งติ้ง 2 บาท";
            $obj->weight = "2 บาท";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "25cm";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "จินไท้เฮง";
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",3)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",14)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",20)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "สร้อยคอซีตรองคั่นปล้อง 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "53cm";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "โต๊ะกัง";
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",2)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",8)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",21)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมีด 1 บาท";
            $obj->weight = "1 baht";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "60";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "ลายกนก";
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);
        }

        $obj = Gold::where("id",22)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนปอกมีด 2 สลึง";
            $obj->weight = "2 สลึง";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "50";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "วิทเฮงหลี";
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",1)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",1)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",23)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "จี้หัวใจ 1 สลึง";
            $obj->weight = "1 สลึง";
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "3cm";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "ชมพู";
            $obj->image = "no image, will set up later";
            $obj->save();

            $ins = GoldType::where("id",5)->first();
            $ins->golds()->save($obj);

            $ins = GoldPattern::where("id",12)->first();
            $ins->golds()->save($obj);



        }

        $obj = Gold::where("id",24)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "ทองแท่ง 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "3cm";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "ชมพู";
            $obj->image = "no image, will set up later";
            $obj->percentage = "96.5% ทองแท่ง";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->save();

            $ins = GoldType::where("id",8)->first();
            $ins->golds()->save($obj);

        }

        $obj = Gold::where("id",25)->first();//รับซื้อจากลูกค้า
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "ทองแท่ง 1 บาท";
            $obj->weight = "1 บาท";
            $obj->pattern_type = "ทองตัน";
            $obj->size = "3cm";
            $obj->pension_per_piece = null;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = "ชมพู";
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
            $obj->percentage = "96.5% ทองแท่ง";
            $obj->save();

            $ins = GoldType::where("id",8)->first();
            $ins->golds()->save($obj);


        }

        $obj = Gold::where("id",26)->first();//จากร้านขายส่ง อนุมัติ นนตามชั่ง
        if (!$obj) {
            $obj = new Gold();
            $obj->name = "แหวนมิกกี้";
            $obj->custom_weight = 15.27;
            $obj->pattern_type = "ทองโป่ง";
            $obj->size = "52";
            $obj->pension_per_piece = 2000;
            $obj->import_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->brand = null;
            $obj->gold_buy_price_wholesale = 31100;
            $obj->image = "no image, will set up later";
            $obj->stock_approval_status = "อนุมัติ";
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
    }
}
