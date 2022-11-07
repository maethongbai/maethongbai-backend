<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomOrderWorker extends Model
{
    use HasFactory;

    public function customOrders() {
        return $this->hasMany(CustomOrder::class, "custom_order_worker_id", "id");
    }
}
