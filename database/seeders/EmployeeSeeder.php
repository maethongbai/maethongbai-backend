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
            $obj->role = "employee";
            $obj->save();

            $user = User::all()->where("first_name","=","โอปอ")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",3)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "แบม";
            $obj->work_start_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->birth_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->salary = 35000;
            $obj->role = "account";
            $obj->save();

            $user = User::all()->where("first_name","=","แบม")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",4)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "จ้าน";
            $obj->work_start_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->birth_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->salary = 20000;
            $obj->role = "employee";
            $obj->save();

            $user = User::all()->where("first_name","=","Zhan")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",5)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "ป๋อ";
            $obj->work_start_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->birth_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->salary = 25000;
            $obj->role = "employee";
            $obj->save();

            $user = User::all()->where("first_name","=","Yibo")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",6)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "กอล์ฟ";
            $obj->work_start_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->birth_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->salary = 25000;
            $obj->role = "employee";
            $obj->save();

            $user = User::all()->where("first_name","=","กอล์ฟ")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",7)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "บอส";
            $obj->work_start_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->birth_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->salary = 28000;
            $obj->role = "account";
            $obj->save();

            $user = User::all()->where("first_name","=","บอส")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",8)->first(); //ลาออก
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "แมค";
            $obj->work_start_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->birth_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->salary = 28100;
            $obj->work_quit_date =  fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->role = "account";
            $obj->save();

            $user = User::all()->where("first_name","=","แม็ค")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",9)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "อมร";
            $obj->work_start_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->birth_date = fake()->dateTimeBetween('-10 years')->format('Y-m-d');
            $obj->salary = 28000;
            $obj->role = "manager";
            $obj->save();

            $user = User::all()->where("first_name","=","อมร")->first();
            $obj->user()->save($user);
        }
    }
}
