<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function redemption() {
        return $this->belongsToMany(Redemption::class, "employee_id");
    }

    public function onsiteSale() {
        return $this->belongsToMany(OnsiteSale::class);
    }

    public function income() {
        return $this->belongsToMany(Income::class);
    }

    public function withdrawal() {
        return $this->belongsToMany(Withdrawal::class);
    }

    public function onlineSale() {
        return $this->belongsTo(OnlineSale::class);
    }

    public function customOrder() {
        return $this->belongsToMany(CustomOrder::class);
    }
}
