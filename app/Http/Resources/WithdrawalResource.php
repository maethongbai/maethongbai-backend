<?php

namespace App\Http\Resources;

use App\Models\Employee;
use Illuminate\Http\Resources\Json\JsonResource;

class WithdrawalResource extends JsonResource
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
            'amount' => $this->amount,
            'employee' => Employee::find($this->employee_id),
            'employee_withdrawal' => Employee::find($this->withdrawals_employee_id),
            'withdrawal_date' => $this->withdrawal_date,
            'withdrawal_status' => $this->withdrawal_status
        ];
    }
}
