<?php

namespace Database\Seeders;

use App\Models\CustomOrderWorker;
use App\Models\GoldPattern;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomOrderWorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = CustomOrderWorker::where("id",1)->first();
        if (!$obj) {
            $obj = new CustomOrderWorker();
            $obj->name = "ชมพู";
            $obj->phone = "0217635542";
            $obj->save();
        }

        $obj = CustomOrderWorker::where("id",2)->first();
        if (!$obj) {
            $obj = new CustomOrderWorker();
            $obj->name = "ลายกนก";
            $obj->phone = "0273645326";
            $obj->save();
        }

        $obj = CustomOrderWorker::where("id",3)->first();
        if (!$obj) {
            $obj = new CustomOrderWorker();
            $obj->name = "บ้านช่างทอง";
            $obj->phone = "0233420392";
            $obj->save();
        }

        $obj = CustomOrderWorker::where("id",4)->first();
        if (!$obj) {
            $obj = new CustomOrderWorker();
            $obj->name = "หลู่อยู่ฮวด";
            $obj->phone = "0230482304";
            $obj->save();
        }

        $obj = CustomOrderWorker::where("id",5)->first();
        if (!$obj) {
            $obj = new CustomOrderWorker();
            $obj->name = "จิ้นไทเฮง";
            $obj->phone = "0230482746";
            $obj->save();
        }

        $obj = CustomOrderWorker::where("id",6)->first();
        if (!$obj) {
            $obj = new CustomOrderWorker();
            $obj->name = "ทองสวย";
            $obj->phone = "0257698400";
            $obj->save();
        }

        $obj = CustomOrderWorker::where("id",7)->first();
        if (!$obj) {
            $obj = new CustomOrderWorker();
            $obj->name = "แสงนภา";
            $obj->phone = "0205939583";
            $obj->save();
        }
    }
}
