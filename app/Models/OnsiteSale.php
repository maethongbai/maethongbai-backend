<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnsiteSale extends Model
{
    use HasFactory;

    public function gold() {
        return $this->hasOne(Gold::class, "id", "gold_id");
    }

    public function sellPrice() {
        return $this->hasOne(GoldPrice::class, "id", "sell_price_id");
    }

    public function employee() {
        return $this->hasOne(Employee::class, "id", "employee_id");
    }

    public function user() {
        return $this->hasOne(User::class, "id", "user_id");
    }
}
