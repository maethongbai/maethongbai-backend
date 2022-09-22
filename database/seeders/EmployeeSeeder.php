<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\GoldPattern;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = Employee::where("id",1)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "ปิ่น";
            $obj->work_start_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->birth_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->salary = 15000;
            $obj->work_quit_date =  fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->save();

            $user = User::all()->where("first_name","=","ปิ่นปิ่นปิ่น")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",2)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "ปอ";
            $obj->work_start_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->birth_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->salary = 30000;
            $obj->work_quit_date =  fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->role = "manager";
            $obj->save();

            $user = User::all()->where("first_name","=","โอปอ")->first();
            $obj->user()->save($user);
        }
    }
}
