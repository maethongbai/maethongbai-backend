<?php

namespace App\Http\Resources;

use App\Models\CustomOrderWorker;
use App\Models\Employee;
use App\Models\GoldPrice;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomOrderResource extends JsonResource
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
            'type' => $this->type,
            'weight' => $this->weight,
            'wage' => $this->wage,
            'full_price' => $this->full_price,
            'deposit_total_amount' => $this->deposit_total_amount,
            'difference_amount' => $this->difference_amount,
            'finish_date' => $this->finish_date,
            'order_date' => $this->order_date,
            'delivery_date' => $this->delivery_date,
            'custom_order_worker' => CustomOrderWorker::find($this->custom_order_worker_id),
            'gold_order_price' => GoldPrice::find($this->gold_order_price_id),
            'deposit_payment_method' => $this->deposit_payment_method,
            'deposit_credit_card_type' => $this->deposit_credit_card_type,
            'deposit_bank_name' => $this->deposit_bank_name,
            'deposit_paid_amount' => $this->deposit_paid_amount,
            'deposit_change_amount' => $this->deposit_change_amount,
            'deposit_slip_image' => $this->deposit_slip_image,
            'deposit_status' => $this->deposit_status,
            'deposit_note' => $this->deposit_note,
            'user' => new UserResource(User::find($this->user_id)),
            'employee' => Employee::find($this->employee_id),
            'custom_order_status' => $this->custom_order_status,
            'difference_payment_method' => $this->difference_payment_method,
            'difference_credit_card_type' => $this->difference_credit_card_type,
            'difference_bank_name' => $this->difference_bank_name,
            'difference_paid_amount' => $this->difference_paid_amount,
            'difference_change_amount' => $this->difference_change_amount,
            'difference_slip_image' => $this->difference_slip_image,
            'difference_status' => $this->difference_status,
            'difference_note' => $this->difference_note
        ];
    }
}
