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

        $obj = User::where("id",4)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "bamboo";
            $obj->email = "bbamm@gmail.com";
            $obj->password = Hash::make("bamboo");
            $obj->name_prefix = "นาย";
            $obj->first_name = "แบม";
            $obj->last_name = "บู";
            $obj->phone = "0800000004";
            $obj->role = "account";
            $obj->save();
        }

        $obj = User::where("id",5)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "amorn";
            $obj->email = "amorn@gmail.com";
            $obj->password = Hash::make("amorn");
            $obj->name_prefix = "นาย";
            $obj->first_name = "อมร";
            $obj->last_name = "ติระศิริชัย";
            $obj->phone = "0800000005";
            $obj->role = "manager";
            $obj->save();
        }

        $obj = User::where("id",6)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "zhan";
            $obj->email = "zhan1005@gmail.com";
            $obj->password = Hash::make("zhan");
            $obj->name_prefix = "นาย";
            $obj->first_name = "Zhan";
            $obj->last_name = "Xiao";
            $obj->phone = "0800000006";
            $obj->role = "employee";
            $obj->save();
        }

        $obj = User::where("id",7)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "bo";
            $obj->email = "yibo0805@gmail.com";
            $obj->password = Hash::make("bo");
            $obj->name_prefix = "นาย";
            $obj->first_name = "Yibo";
            $obj->last_name = "Wang";
            $obj->phone = "0800000007";
            $obj->role = "employee";
            $obj->save();
        }

        $obj = User::where("id",8)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "กอล์ฟ";
            $obj->email = "golfpin@gmail.com";
            $obj->password = Hash::make("กอล์ฟ");
            $obj->name_prefix = "นาย";
            $obj->first_name = "กอล์ฟ";
            $obj->last_name = "สตาร์บัค";
            $obj->phone = "0800000008";
            $obj->role = "employee";
            $obj->save();
        }

        $obj = User::where("id",9)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "บอส";
            $obj->email = "boss@gmail.com";
            $obj->password = Hash::make("บอส");
            $obj->name_prefix = "นาย";
            $obj->first_name = "บอส";
            $obj->last_name = "สตาร์";
            $obj->phone = "0800000009";
            $obj->role = "account";
            $obj->save();
        }

        $obj = User::where("id",10)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "harry";
            $obj->email = "harry@gmail.com";
            $obj->password = Hash::make("harry");
            $obj->name_prefix = "นาย";
            $obj->first_name = "Harry";
            $obj->last_name = "Style";
            $obj->phone = "0800000010";
            $obj->role = "user";
            $obj->address = "ลาดพร้าว";
            $obj->save();
        }

        $obj = User::where("id",11)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "kiko";
            $obj->email = "kiko@gmail.com";
            $obj->password = Hash::make("kiko");
            $obj->name_prefix = "นางสาว";
            $obj->first_name = "Kiko";
            $obj->last_name = "Long";
            $obj->phone = "0800000011";
            $obj->role = "user";
            $obj->save();
        }

        $obj = User::where("id",12)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "diana";
            $obj->email = "diana@gmail.com";
            $obj->password = Hash::make("diana");
            $obj->name_prefix = "นางสาว";
            $obj->first_name = "Diana";
            $obj->last_name = "Jam";
            $obj->phone = "0800000012";
            $obj->role = "user";
            $obj->address = "บางกะปิ";
            $obj->save();
        }

        $obj = User::where("id",13)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "taylor";
            $obj->email = "taylor@gmail.com";
            $obj->password = Hash::make("taylor");
            $obj->name_prefix = "นางสาว";
            $obj->first_name = "Taylor";
            $obj->last_name = "Swift";
            $obj->phone = "0800000013";
            $obj->role = "user";
            $obj->save();
        }

        $obj = User::where("id",14)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "shawn";
            $obj->email = "shawn@gmail.com";
            $obj->password = Hash::make("shawn");
            $obj->name_prefix = "นาย";
            $obj->first_name = "Shawn";
            $obj->last_name = "Mendes";
            $obj->phone = "0800000014";
            $obj->role = "user";
            $obj->address = "บางแค";
            $obj->save();
        }

        $obj = User::where("id",15)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "natalee";
            $obj->email = "natalee@gmail.com";
            $obj->password = Hash::make("natalee");
            $obj->name_prefix = "นางสาว";
            $obj->first_name = "นาตาลี";
            $obj->last_name = "โบว่า";
            $obj->phone = "0800000015";
            $obj->role = "user";
            $obj->address = "บ้านหนองใหญ่";
            $obj->save();
        }

        $obj = User::where("id",16)->first();
        if (!$obj) {
            $obj = new User();
            $obj->username = "maxgy";
            $obj->email = "maxgy@gmail.com";
            $obj->password = Hash::make("maxgy");
            $obj->name_prefix = "นาย";
            $obj->first_name = "แม็ค";
            $obj->last_name = "กีกี้";
            $obj->phone = "0800000016";
            $obj->role = "employee";
            $obj->save();
        }
    }
}
