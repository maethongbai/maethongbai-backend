<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CustomOrderWorker;
use App\Models\Employee;
use App\Models\GoldPattern;
use App\Models\GoldPrice;
use App\Models\GoldType;
use App\Models\OnlineSale;
use App\Models\OnsiteSale;
use App\Models\Wholesale;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            CustomOrderWorkerSeeder::class,
            EmployeeSeeder::class,
            GoldPatternSeeder::class,
            GoldPriceSeeder::class,
            GoldTypeSeeder::class,
            WholesaleSeeder::class,
            GoldSeeder::class,
            RedemptionSeeder::class,
            OnsiteSaleSeeder::class,
            IncomeSeeder::class,
            WithdrawalSeeder::class,
            OnlineSaleSeeder::class,
            CustomOrderSeeder::class
        ]);
    }
}
