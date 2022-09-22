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
            $obj->name = "test withdrawal";
            $obj->amount = 3;
            $obj->withdrawal_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->save();

            $ins = Employee::where("id", 1)->first();
            $ins->withdrawals()->save($obj);
        }
    }
}
