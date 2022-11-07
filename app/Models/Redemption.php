<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redemption extends Model
{
    use HasFactory;

    public function gold() {
        return $this->belongsTo(Gold::class,  "gold_id","id");
    }

    public function goldRedemptionPrice() {
        return $this->belongsTo(GoldPrice::class, "gold_redemption_price_id","id");
    }

    public function employee() {
        return $this->belongsTo(Employee::class, "employee_id","id");
    }

    public function user() {
        return $this->belongsTo(User::class, "user_id","id");
    }

    public function onsiteSales() {
        return $this->hasMany(OnsiteSale::class, "redemption_id", "id");
    }

}
