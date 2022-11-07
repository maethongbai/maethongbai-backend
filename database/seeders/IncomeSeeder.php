<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Income;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = Income::where("id", 1)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่าต่อสร้อย";
            $obj->amount = 2000;
            $obj->transaction_date = "2022-11-03";
            $obj->save();

            $ins = Employee::where("id", 1)->first();
            $ins->incomes()->save($obj);
        }

        $obj = Income::where("id", 2)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่าเชื่อมแหวน";
            $obj->amount = 2500;
            $obj->transaction_date = "2022-11-03";
            $obj->save();

            $ins = Employee::where("id", 2)->first();
            $ins->incomes()->save($obj);
        }

        $obj = Income::where("id", 3)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่าแป้นยางต่างหู";
            $obj->amount = 1500;
            $obj->transaction_date ="2022-11-03";
            $obj->save();

            $ins = Employee::where("id", 3)->first();
            $ins->incomes()->save($obj);
        }

        $obj = Income::where("id", 4)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่าเปลี่ยนตะขอ";
            $obj->amount = 1800;
            $obj->transaction_date = "2022-11-03";
            $obj->save();

            $ins = Employee::where("id", 3)->first();
            $ins->incomes()->save($obj);
        }

        $obj = Income::where("id", 5)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่าเลี่ยมกรอบพลาสติก";
            $obj->amount = 2100;
            $obj->transaction_date = "2022-11-04";
            $obj->save();

            $ins = Employee::where("id", 4)->first();
            $ins->incomes()->save($obj);
        }

        $obj = Income::where("id", 6)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่าซ่อยสีลงยา";
            $obj->amount = 2800;
            $obj->transaction_date = "2022-11-04";
            $obj->save();

            $ins = Employee::where("id", 5)->first();
            $ins->incomes()->save($obj);
        }

        $obj = Income::where("id", 7)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่าเชื่อมห่วงสร้อยมือ";
            $obj->amount = 2000;
            $obj->transaction_date = "2022-11-04";
            $obj->save();

            $ins = Employee::where("id", 6)->first();
            $ins->incomes()->save($obj);
        }

        $obj = Income::where("id", 8)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่าเลี่ยมจี้พลาสติกกันนำ้";
            $obj->amount = 2300;
            $obj->transaction_date = "2022-11-05";
            $obj->save();

            $ins = Employee::where("id", 7)->first();
            $ins->incomes()->save($obj);
        }

        $obj = Income::where("id", 9)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่าเชื่อมสร้อยมือ";
            $obj->amount = 1200;
            $obj->transaction_date = "2022-11-06";
            $obj->save();

            $ins = Employee::where("id", 7)->first();
            $ins->incomes()->save($obj);
        }

        $obj = Income::where("id", 10)->first();
        if (!$obj) {
            $obj = new Income();
            $obj->name = "ค่ากล่องทองรูปหัวใจ";
            $obj->amount = 150;
            $obj->note = "แถมกล่องแหวนหัวใจให้ลูกค้า";
            $obj->transaction_date = "2022-11-06";
            $obj->save();

            $ins = Employee::where("id", 5)->first();
            $ins->incomes()->save($obj);
        }
    }
}
