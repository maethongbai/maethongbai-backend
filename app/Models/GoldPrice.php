<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldPrice extends Model
{
    use HasFactory;

    public function goldRedemptionPrice() {
        return $this->belongsToMany(Redemption::class);
    }

    public function gold() {
        return $this->belongsToMany(Gold::class);
    }

    public function onsiteSale() {
        return $this->belongsToMany(OnsiteSale::class);
    }

    public function onlineSale() {
        return $this->belongsToMany(OnlineSale::class);
    }

    public function customOrder() {
        return $this->belongsToMany(CustomOrder::class);
    }
}
