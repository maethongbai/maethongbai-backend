<?php

namespace App\Http\Resources;

use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPattern;
use App\Models\GoldPrice;
use App\Models\GoldType;
use App\Models\User;
use App\Models\Wholesale;
use Illuminate\Http\Resources\Json\JsonResource;

class GoldResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'gold_type' => GoldType::find($this->gold_type_id),
            'weight' => $this->weight,
            'custom_weight'=> $this->custom_weight,
            'pattern_type' => $this->pattern_type,
            'gold_pattern' => GoldPattern::find($this->gold_pattern_id),
            'size' => $this->size,
            'pension_per_piece' => $this->pension_per_piece,
            'import_date' => $this->import_date,
            'wholesale' => Wholesale::find($this->wholesale_id),
            'gold_buy_price_wholesale' => $this->gold_buy_price_wholesale,
            'stock_approval_status' => $this->stock_approval_status,
            'percentage' => $this->percentage,
            'brand' => $this->brand,
            'is_sold' => $this->is_sold,
            'is_redemption' => $this->is_redemption,
            'image' => $this->image,
            'employee_add_stock' => Employee::find($this->employee_add_stock_id)
        ];
    }
}
