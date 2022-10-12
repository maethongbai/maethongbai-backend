<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldPrice extends Model
{
    use HasFactory;

    public function redemptions() {
        return $this->hasMany(Redemption::class, "gold_redemption_price_id", "id");
    }

    public function onsiteSales() {
        return $this->hasMany(OnsiteSale::class, "gold_sell_price_id", "id");
    }

    public function onlineSales() {
        return $this->hasMany(OnlineSale::class, "gold_sell_price_id", "id");
    }

    public function customOrders() {
        return $this->hasMany(CustomOrder::class, "gold_order_price_id", "id");
    }
}
