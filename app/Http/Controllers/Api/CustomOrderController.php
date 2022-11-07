<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomOrderResource;
use App\Models\CustomOrder;
use App\Models\CustomOrderWorker;
use App\Models\Employee;
use App\Models\GoldPrice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custom_orders = CustomOrder::all();
        return CustomOrderResource::collection($custom_orders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $custom_order = new CustomOrder();
        $custom_order->name = $request->get("name");
        $custom_order->type = $request->get("type");
        $custom_order->weight = $request->get("weight");
        $custom_order->wage = $request->get("wage");
        $custom_order->full_price = $request->get("full_price");
        $custom_order->deposit_total_amount = $request->get("deposit_total_amount");
        $custom_order->difference_amount = $request->get("difference_amount");
        if ($request->has("finish_date")) $custom_order->finish_date = $request->get("finish_date");
        $custom_order->order_date = $request->get("order_date");
        $custom_order->delivery_date = $request->get("delivery_date");
        if ($request->has("deposit_payment_method")) $custom_order->deposit_payment_method = $request->get("deposit_payment_method");
        if ($request->has("deposit_credit_card_type")) $custom_order->deposit_credit_card_type = $request->get("deposit_credit_card_type");
        if ($request->has("deposit_bank_name")) $custom_order->deposit_bank_name = $request->get("deposit_bank_name");
        if ($request->has("deposit_paid_amount")) $custom_order->deposit_paid_amount = $request->get("deposit_paid_amount");
        if ($request->has("deposit_change_amount")) $custom_order->deposit_change_amount = $request->get("deposit_change_amount");
        if ($request->has("deposit_status")) $custom_order->deposit_status = $request->get("deposit_status");
        if ($request->has("deposit_note")) $custom_order->deposit_change_amount = $request->get("deposit_note");
        if ($request->has("custom_order_status")) $custom_order->custom_order_status = $request->get("custom_order_status");
        if ($request->has("difference_payment_method")) $custom_order->difference_payment_method = $request->get("difference_payment_method");
        if ($request->has("difference_credit_card_type")) $custom_order->difference_credit_card_type = $request->get("difference_credit_card_type");
        if ($request->has("difference_bank_name")) $custom_order->difference_bank_name = $request->get("difference_bank_name");
        if ($request->has("difference_paid_amount")) $custom_order->difference_paid_amount = $request->get("difference_paid_amount");
        if ($request->has("difference_change_amount")) $custom_order->difference_change_amount = $request->get("difference_change_amount");
        if ($request->has("difference_status")) $custom_order->difference_status = $request->get("deposit_status");
        if ($request->has("difference_note")) $custom_order->difference_note = $request->get("difference_note");
        if ($request->has("deposit_slip_image")) $custom_order->deposit_slip_image = $request->get("deposit_slip_image");
        if ($request->has("difference_slip_image")) $custom_order->difference_slip_image = $request->get("difference_slip_image");

        $custom_order->customOrderWorker()->associate(CustomOrderWorker::find($request->get("custom_order_worker_id")));
        $custom_order->goldOrderPrice()->associate(GoldPrice::find($request->get("gold_order_price_id")));
        $custom_order->user()->associate(User::find($request->get("user_id")));
        $custom_order->employee()->associate(Employee::find($request->get("employee_id")));

        if ($custom_order->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created custom order id: " . $custom_order->id,
                "custom_order_id" => $custom_order->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Custom order creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomOrder  $custom_order
     * @return \Illuminate\Http\Response
     */
    public function show(CustomOrder $custom_order)
    {
        return new CustomOrderResource($custom_order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomOrder  $custom_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomOrder $custom_order)
    {
        if ($request->has("name")) $custom_order->name = $request->get("name");
        if ($request->has("type")) $custom_order->type = $request->get("type");
        if ($request->has("weight")) $custom_order->weight = $request->get("weight");
        if ($request->has("wage")) $custom_order->wage = $request->get("wage");
        if ($request->has("full_price")) $custom_order->full_price = $request->get("full_price");
        if ($request->has("deposit_total_amount")) $custom_order->deposit_total_amount = $request->get("deposit_total_amount");
        if ($request->has("difference_amount")) $custom_order->difference_amount = $request->get("difference_amount");
        if ($request->has("finish_date")) $custom_order->finish_date = $request->get("finish_date");
        if ($request->has("order_date")) $custom_order->order_date = $request->get("order_date");
        if ($request->has("delivery_date")) $custom_order->delivery_date = $request->get("delivery_date");
        if ($request->has("deposit_payment_method")) $custom_order->deposit_payment_method = $request->get("deposit_payment_method");
        if ($request->has("deposit_credit_card_type")) $custom_order->deposit_credit_card_type = $request->get("deposit_credit_card_type");
        if ($request->has("deposit_bank_name")) $custom_order->deposit_bank_name = $request->get("deposit_bank_name");
        if ($request->has("deposit_paid_amount")) $custom_order->deposit_paid_amount = $request->get("deposit_paid_amount");
        if ($request->has("deposit_change_amount")) $custom_order->deposit_change_amount = $request->get("deposit_change_amount");
        if ($request->has("deposit_note")) $custom_order->deposit_change_amount = $request->get("deposit_note");
        if ($request->has("deposit_status")) $custom_order->deposit_status = $request->get("deposit_status");
        if ($request->has("custom_order_status")) $custom_order->custom_order_status = $request->get("custom_order_status");
        if ($request->has("difference_payment_method")) $custom_order->difference_payment_method = $request->get("difference_payment_method");
        if ($request->has("difference_credit_card_type")) $custom_order->difference_credit_card_type = $request->get("difference_credit_card_type");
        if ($request->has("difference_bank_name")) $custom_order->difference_bank_name = $request->get("difference_bank_name");
        if ($request->has("difference_paid_amount")) $custom_order->difference_paid_amount = $request->get("difference_paid_amount");
        if ($request->has("difference_change_amount")) $custom_order->difference_change_amount = $request->get("difference_change_amount");
        if ($request->has("difference_status")) $custom_order->difference_status = $request->get("difference_status");
        if ($request->has("difference_note")) $custom_order->difference_note = $request->get("difference_note");
        if ($request->has("deposit_slip_image")) $custom_order->deposit_slip_image = $request->get("deposit_slip_image");
        if ($request->has("difference_slip_image")) $custom_order->difference_slip_image = $request->get("difference_slip_image");

        if ($request->has("custom_order_worker_id")) $custom_order->customOrderWorker()->associate(CustomOrderWorker::find($request->get("custom_order_worker_id")));
        if ($request->has("gold_order_price_id")) $custom_order->goldOrderPrice()->associate(GoldPrice::find($request->get("gold_order_price_id")));
        if ($request->has("user_id")) $custom_order->user()->associate(User::find($request->get("user_id")));
        if ($request->has("employee_id")) $custom_order->employee()->associate(Employee::find($request->get("employee_id")));

        if ($custom_order->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated custom order id: " . $custom_order->id,
                "custom_order_id" => $custom_order->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Custom order update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomOrder  $custom_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomOrder $custom_order)
    {
        $id = $custom_order->id;
        if ($custom_order->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted custom order id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Custom order deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
