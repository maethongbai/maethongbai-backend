<?php

namespace App\Http\Resources;

use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class RedemptionResource extends JsonResource
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
            'gold' => Gold::find($this->gold_id),
            'redemption_date' => $this->redemption_date,
            'gold_redemption_price' => GoldPrice::find($this->gold_redemption_price_id),
            'redemption_price' => $this->redemption_price,
            'check_status' => $this->check_status,
            'employee' => Employee::find($this->employee_id),
            'user' => User::find($this->user_id),
            'id_card_image' => $this->id_card_image,
            'note' => $this->note


        ];
    }
}
