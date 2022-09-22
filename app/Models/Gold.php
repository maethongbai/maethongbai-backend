<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gold extends Model
{
    use HasFactory;

    public function redemption() {
        return $this->belongsToMany(Redemption::class);
    }

    public function goldType() {
        return $this->hasOne(GoldType::class,"id","gold_type_id");
    }

    public function goldPattern() {
        return $this->hasOne(GoldPattern::class,"id","gold_pattern_id");
    }

    public function wholesale() {
        return $this->hasOne(Wholesale::class,"id","wholesale_id");
    }

    public function goldBuyPrice() {
        return $this->hasOne(GoldPrice::class,"id","buy_price_id");
    }

    public function onsiteSale() {
        return $this->belongsToMany(OnsiteSale::class);
    }

    public function onlineSale() {
        return $this->belongsToMany(OnlineSale::class);
    }
}
