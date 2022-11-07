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
            $obj->work_start_date = "2020-10-02";
            $obj->birth_date = "1998-10-02";
            $obj->salary = 25000;
            $obj->save();

            $user = User::all()->where("first_name","=","ปิ่นปิ่นปิ่น")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",2)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "ปอ";
            $obj->work_start_date = "2015-03-14";
            $obj->birth_date = "1998-03-06";
            $obj->salary = 28000;
            $obj->role = "employee";
            $obj->save();

            $user = User::all()->where("first_name","=","โอปอ")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",3)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "แบม";
            $obj->work_start_date = "2010-04-25";
            $obj->birth_date = "1993-06-24";
            $obj->salary = 30000;
            $obj->role = "account";
            $obj->save();

            $user = User::all()->where("first_name","=","แบม")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",4)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "จ้าน";
            $obj->work_start_date = "2021-11-09";
            $obj->birth_date = "1991-10-05";
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
            $obj->work_start_date = "2021-05-23";
            $obj->birth_date = "1995-08-05";
            $obj->salary = 23000;
            $obj->role = "employee";
            $obj->save();

            $user = User::all()->where("first_name","=","Yibo")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",6)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "กอล์ฟ";
            $obj->work_start_date = "2022-03-08";
            $obj->birth_date = "1999-12-05";
            $obj->salary = 18000;
            $obj->role = "employee";
            $obj->save();

            $user = User::all()->where("first_name","=","กอล์ฟ")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",7)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "บอส";
            $obj->work_start_date = "2011-09-08";
            $obj->birth_date = "1992-08-08";
            $obj->salary = 28000;
            $obj->role = "account";
            $obj->save();

            $user = User::all()->where("first_name","=","บอส")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",8)->first(); //ลาออก
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "แม็ค";
            $obj->work_start_date = "2018-02-09";
            $obj->birth_date = "1991-08-03";
            $obj->salary = 31000;
            $obj->work_quit_date = "2022-01-11";
            $obj->role = "account";
            $obj->save();

            $user = User::all()->where("first_name","=","แม็ค")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",9)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "อมร";
            $obj->work_start_date = "2000-01-01";
            $obj->birth_date = "1963-01-02";
            $obj->salary = 100000;
            $obj->role = "manager";
            $obj->save();

            $user = User::all()->where("first_name","=","อมร")->first();
            $obj->user()->save($user);
        }

        $obj = Employee::where("id",10)->first();
        if (!$obj) {
            $obj = new Employee();
            $obj->nickname = "มุ้ย";
            $obj->work_start_date = "2000-02-01";
            $obj->birth_date = "1970-11-02";
            $obj->salary = 90000;
            $obj->role = "account";
            $obj->save();

            $user = User::all()->where("first_name","=","วิภาพร")->first();
            $obj->user()->save($user);
        }
    }
}
