<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldType extends Model
{
    use HasFactory;

    public function gold() {
        return $this->belongsToMany(Gold::class);
    }
}
