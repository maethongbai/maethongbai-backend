<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\IsReadable;

class Gold extends Model
{
    use HasFactory;

    public function goldType() {
        return $this->belongsTo(GoldType::class,"gold_type_id", "id");
    }

    public function goldPattern() {
        return $this->belongsTo(GoldPattern::class,"gold_pattern_id", "id");
    }

    public function wholesale() {
        return $this->belongsTo(Wholesale::class, "wholesale_id", "id");
    }

    public function employeeAddStock() {
        return $this->belongsTo(Employee::class, "employee_add_stock_id", "id");
    }

    public function redemptions() {
        return $this->hasMany(Redemption::class, "gold_id", "id");
    }

    public function onsiteSales() {
        return $this->hasMany(OnsiteSale::class, "gold_id", "id");
    }

    public function onlineSales() {
        return $this->hasMany(OnlineSale::class, "gold_id", "id");
    }

}
