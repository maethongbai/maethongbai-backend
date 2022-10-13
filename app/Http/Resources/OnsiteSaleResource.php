<?php

namespace App\Http\Resources;

use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\Redemption;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class OnsiteSaleResource extends JsonResource
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
            'gold' => new GoldResource(Gold::find($this->gold_id)),
            'sale_date' => $this->sale_date,
            'gold_price' => $this->gold_price,
            'payment_method' => $this->payment_method,
            'credit_card_type' => $this->credit_card_type,
            'bank_name' => $this->bank_name,
            'paid_amount' => $this->paid_amount,
            'paid_change' => $this->paid_change,
            'slip_image' => $this->slip_image,
            'gold_sell_price' => GoldPrice::find($this->gold_sell_price_id),
            'transfer_status' => $this->transfer_status,
            'transfer_note' => $this->transfer_note,
            'is_switch_gold' => $this->is_switch_gold,
            'employee' => Employee::find($this->employee_id),
            'user' => new UserResource(User::find($this->user_id)),
            'redemption' => new RedemptionResource(Redemption::find($this->redemption_id))
        ];
    }
}
