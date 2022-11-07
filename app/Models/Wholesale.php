<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wholesale extends Model
{
    use HasFactory;

    public function golds() {
        return $this->hasMany(Gold::class, "wholesale_id", "id");
    }
}
