<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    public function employee() {
        return $this->belongsTo(Employee::class, "employee_id","id");
    }

    public function withdrawalEmployee() {
        return $this->belongsTo(Employee::class, "withdrawals_employee_id","id");
    }
}
