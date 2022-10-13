<?php

namespace App\Http\Resources;

use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class OnlineSaleResource extends JsonResource
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
            'slip_image' => $this->slip_image,
            'transfer_status' => $this->transfer_status,
            'transfer_note' => $this->transfer_note,
            'additional_note' => $this->additional_note,
            'gold_sell_price' => GoldPrice::find($this->gold_sell_price_id),
            'amount' => $this->amount,
            'delivery_status' => $this->delivery_status,
            'tracking_number' => $this->tracking_number,
            'tracking_id_employee' => Employee::find($this->tracking_id_employee_id),
            'delivery_status_employee' => Employee::find($this->delivery_status_employee_id),
            'note' => $this->note,
            'user' => new UserResource(User::find($this->user_id))
        ];
    }
}
