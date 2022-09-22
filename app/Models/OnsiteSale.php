<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnsiteSale extends Model
{
    use HasFactory;

    public function gold() {
        return $this->belongsTo(Gold::class, "gold_id","id");
    }

    public function goldSellPrice() {
        return $this->belongsTo(GoldPrice::class, "gold_sell_price_id","id");
    }

    public function employee() {
        return $this->belongsTo(Employee::class,  "employee_id","id");
    }

    public function user() {
        return $this->belongsTo(User::class, "user_id","id");
    }
}
