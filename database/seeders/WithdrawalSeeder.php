<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Withdrawal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WithdrawalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = Withdrawal::where("id", 1)->first();
        if (!$obj) {
            $obj = new Withdrawal();
            $obj->name = "เบิก 50000";
            $obj->amount = 50000;
            $obj->withdrawal_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->withdrawal_status = "อนุมัติ";
            $obj->save();

            $ins = Employee::where("id", 1)->first();
            $ins->withdrawals()->save($obj);

            $ins = Employee::where("id", 3)->first();
            $ins->withdrawalsEmployee()->save($obj);
        }

        $obj = Withdrawal::where("id", 2)->first();
        if (!$obj) {
            $obj = new Withdrawal();
            $obj->name = "เบิก 100000";
            $obj->amount = 10000;
            $obj->withdrawal_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->save();

            $ins = Employee::where("id", 2)->first();
            $ins->withdrawals()->save($obj);

            $ins = Employee::where("id", 7)->first();
            $ins->withdrawalsEmployee()->save($obj);
        }

        $obj = Withdrawal::where("id", 3)->first();
        if (!$obj) {
            $obj = new Withdrawal();
            $obj->name = "เบิก 40000";
            $obj->amount = 40000;
            $obj->withdrawal_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->withdrawal_status = "ไม่อนุมัติ";
            $obj->save();

            $ins = Employee::where("id", 3)->first();
            $ins->withdrawals()->save($obj);

            $ins = Employee::where("id", 8)->first();
            $ins->withdrawalsEmployee()->save($obj);
        }

        $obj = Withdrawal::where("id", 4)->first();
        if (!$obj) {
            $obj = new Withdrawal();
            $obj->name = "เบิกค่าตำรวจ 2000 บาท";
            $obj->amount = 2000;
            $obj->withdrawal_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->withdrawal_status = "อนุมัติ";
            $obj->save();

            $ins = Employee::where("id", 4)->first();
            $ins->withdrawals()->save($obj);

            $ins = Employee::where("id", 3)->first();
            $ins->withdrawalsEmployee()->save($obj);
        }

        $obj = Withdrawal::where("id", 5)->first();
        if (!$obj) {
            $obj = new Withdrawal();
            $obj->name = "เบิกค่าคอมพนักงาน 3000 บาท";
            $obj->amount = 3000;
            $obj->withdrawal_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->withdrawal_status = "อนุมัติ";
            $obj->save();

            $ins = Employee::where("id", 5)->first();
            $ins->withdrawals()->save($obj);

            $ins = Employee::where("id", 7)->first();
            $ins->withdrawalsEmployee()->save($obj);
        }

        $obj = Withdrawal::where("id", 6)->first();
        if (!$obj) {
            $obj = new Withdrawal();
            $obj->name = "เบิก 55000";
            $obj->amount = 55000;
            $obj->withdrawal_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->save();

            $ins = Employee::where("id", 4)->first();
            $ins->withdrawals()->save($obj);

            $ins = Employee::where("id", 8)->first();
            $ins->withdrawalsEmployee()->save($obj);
        }

    }
}
