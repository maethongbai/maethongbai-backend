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
            $obj->name = "test income name";
            $obj->amount = 20000;
            $obj->transaction_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->save();

            $ins = Employee::where("id", 1)->first();
            $ins->incomes()->save($obj);
        }
    }
}
