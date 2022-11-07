<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OnlineSaleResource;
use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\OnlineSale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OnlineSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onlineSales = OnlineSale::all();
        return OnlineSaleResource::collection($onlineSales);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $onlineSale = new OnlineSale();
        $onlineSale->sale_date = $request->get("sale_date");
        $onlineSale->gold_price = $request->get("gold_price");
        if ($request->has("transfer_status")) $onlineSale->transfer_status = $request->get("transfer_status");
        if ($request->has("transfer_note")) $onlineSale->transfer_note = $request->get("transfer_note");
        if ($request->has("additional_note")) $onlineSale->additional_note = $request->get("additional_note");
        if ($request->has("delivery_status")) $onlineSale->delivery_status = $request->get("delivery_status");
        if ($request->has("tracking_number")) $onlineSale->tracking_number = $request->get("tracking_number");
        if ($request->has("slip_image")) $onlineSale->slip_image = $request->get("slip_image");
        $onlineSale->amount = $request->get("amount");
        if ($request->has("note")) $onlineSale->note = $request->get("note");

        $onlineSale->gold()->associate(Gold::find($request->get("gold_id")));
        $onlineSale->goldSellPrice()->associate(GoldPrice::find($request->get("gold_sell_price_id")));
        $onlineSale->user()->associate(User::find($request->get("user_id")));
        if ($request->has("tracking_id_employee_id")) $onlineSale->trackingIDEmployee()->associate(Employee::find($request->get("tracking_id_employee_id")));
        if ($request->has("delivery_status_employee_id")) $onlineSale->deliveryStatusEmployee()->associate(Employee::find($request->get("delivery_status_employee_id")));

        if ($onlineSale->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created online sale id: " . $onlineSale->id,
                "online_sale_id" => $onlineSale->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Online sale creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnlineSale  $onlineSale
     * @return \Illuminate\Http\Response
     */
    public function show(OnlineSale $onlineSale)
    {
        return new OnlineSaleResource($onlineSale);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OnlineSale  $onlineSale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnlineSale $onlineSale)
    {
        if ($request->has("sale_date")) $onlineSale->sale_date = $request->get("sale_date");
        if ($request->has("gold_price")) $onlineSale->gold_price = $request->get("gold_price");
        if ($request->has("transfer_status")) $onlineSale->transfer_status = $request->get("transfer_status");
        if ($request->has("transfer_note")) $onlineSale->transfer_note = $request->get("transfer_note");
        if ($request->has("additional_note")) $onlineSale->additional_note = $request->get("additional_note");
        if ($request->has("amount")) $onlineSale->amount = $request->get("amount");
        if ($request->has("delivery_status")) $onlineSale->delivery_status = $request->get("delivery_status");
        if ($request->has("tracking_number")) $onlineSale->tracking_number = $request->get("tracking_number");
        if ($request->has("note")) $onlineSale->note = $request->get("note");
        if ($request->has("slip_image")) $onlineSale->slip_image = $request->get("slip_image");

        if ($request->has("gold_id")) $onlineSale->gold()->associate(Gold::find($request->get("gold_id")));
        if ($request->has("gold_sell_price_id")) $onlineSale->goldSellPrice()->associate(GoldPrice::find($request->get("gold_sell_price_id")));
        if ($request->has("user_id")) $onlineSale->user()->associate(User::find($request->get("user_id")));
        if ($request->has("tracking_id_employee_id")) $onlineSale->trackingIDEmployee()->associate(Employee::find($request->get("tracking_id_employee_id")));
        if ($request->has("delivery_status_employee_id")) $onlineSale->deliveryStatusEmployee()->associate(Employee::find($request->get("delivery_status_employee_id")));

        if ($onlineSale->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated online sale id: " . $onlineSale->id,
                "online_sale_id" => $onlineSale->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Online sale updated failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnlineSale  $onlineSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnlineSale $onlineSale)
    {
        $id = $onlineSale->id;
        if ($onlineSale->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted online sale id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Online sale deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
