<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redemption extends Model
{
    use HasFactory;

    public function goldRedemptionPrice() {
        return $this->hasOne(GoldPrice::class,"id","gold_redemption_id");
    }

    public function employee() {
        return $this->hasOne(Employee::class,"id","employee_id");
    }

    public function user() {
        return $this->hasOne(User::class,"id","user_id");
    }

    public function gold() {
        return $this->hasOne(Gold::class,"id","gold_id");
    }
}
