<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomOrder extends Model
{
    use HasFactory;

    public function customOrderWorker() {
        return $this->hasOne(CustomOrderWorker::class, "id", "custom_order_worker_id");
    }

    public function goldOrderPrice() {
        return $this->hasOne(GoldPrice::class, "id", "gold_order_price_id");
    }

    public function user() {
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function employee() {
        return $this->hasOne(Employee::class, "id", "employee_id");
    }
}
