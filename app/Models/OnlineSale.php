<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineSale extends Model
{
    use HasFactory;

    public function gold() {
        return $this->hasMany(Gold::class, "id", "gold_id");
    }

    public function salePrice() {
        return $this->hasOne(GoldPrice::class, "id", "sale_price_id");
    }

    public function trackingIDEmployee() {
        return $this->hasOne(Employee::class, "id", "tracking_id_employee_id");
    }

    public function deliveryStatusEmployee() {
        return $this->hasOne(Employee::class, "id", "delivery_status_employee_id");
    }

    public function user() {
        return $this->hasOne(User::class, "id", "user_id");
    }
}
