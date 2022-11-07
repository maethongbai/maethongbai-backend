<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomOrder extends Model
{
    use HasFactory;

    public function customOrderWorker() {
        return $this->belongsTo(CustomOrderWorker::class, "custom_order_worker_id", "id");
    }

    public function goldOrderPrice() {
        return $this->belongsTo(GoldPrice::class, "gold_order_price_id", "id");
    }

    public function user() {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function employee() {
        return $this->belongsTo(Employee::class, "employee_id", "id");
    }
}
