<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasOne(User::class,"employee_id", "id");
    }

    public function redemptions() {
        return $this->hasMany(Redemption::class, "employee_id", "id");
    }

    public function onsiteSales() {
        return $this->hasMany(OnsiteSale::class, "employee_id", "id");
    }

    public function incomes() {
        return $this->hasMany(Income::class, "employee_id", "id");
    }

    public function withdrawals() {
        return $this->hasMany(Withdrawal::class, "employee_id", "id");
    }

    public function onlineSaleTrackingIDs() {
        return $this->hasMany(OnlineSale::class, "tracking_id_employee_id", "id");
    }

    public function onlineSaleDeliveryStatuses() {
        return $this->hasMany(OnlineSale::class, "delivery_status_employee_id", "id");
    }

    public function customOrders() {
        return $this->hasMany(CustomOrder::class, "employee_id", "id");
    }

    public function golds() {
        return $this->hasMany(Gold::class, "employee_add_stock_id", "id");
    }
}
