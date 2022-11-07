<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineSale extends Model
{
    use HasFactory;

    public function gold() {
        return $this->belongsTo(Gold::class,  "gold_id","id");
    }

    public function goldSellPrice() {
        return $this->belongsTo(GoldPrice::class,  "gold_sell_price_id","id");
    }

    public function trackingIDEmployee() {
        return $this->belongsTo(Employee::class, "tracking_id_employee_id","id");
    }

    public function deliveryStatusEmployee() {
        return $this->belongsTo(Employee::class, "delivery_status_employee_id","id");
    }

    public function user() {
        return $this->belongsTo(User::class, "user_id","id");
    }
}
