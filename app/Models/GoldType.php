<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldType extends Model
{
    use HasFactory;

    public function golds() {
        return $this->hasMany(Gold::class, "gold_type_id", "id");
    }
}
