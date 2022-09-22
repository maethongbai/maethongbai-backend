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
            $obj->name = "custom order worker name";
            $obj->phone = "0800000001";
            $obj->save();
        }
    }
}
