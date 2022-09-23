<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = User::where("id",1)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "namkhing";
            $obj->email = "namkhing@gmail.com";
            $obj->password = Hash::make("namkhing");
            $obj->name_prefix = "นางสาว";
            $obj->first_name = "Reina";
            $obj->last_name = "Namaki";
            $obj->phone = "0800000001";
            $obj->role = "user";
            $obj->save();
        }

        $obj = User::where("id",2)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "pinpinpin";
            $obj->email = "pinpinpin@gmail.com";
            $obj->password = Hash::make("pinpinpin");
            $obj->name_prefix = "นางสาว";
            $obj->first_name = "ปิ่นปิ่นปิ่น";
            $obj->last_name = "นามสกุลปิ่น";
            $obj->phone = "0800000002";
            $obj->role = "employee";
            $obj->save();
        }

        $obj = User::where("id",3)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "opaller91";
            $obj->email = "opaller91@gmail.com";
            $obj->password = Hash::make("opaller91");
            $obj->name_prefix = "นางสาว";
            $obj->first_name = "โอปอ";
            $obj->last_name = "เลอร์";
            $obj->phone = "0800000003";
            $obj->role = "employee";
            $obj->save();
        }
    }
}
