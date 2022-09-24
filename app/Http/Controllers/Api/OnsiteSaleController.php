<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\OnsiteSale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OnsiteSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onsiteSales = OnsiteSale::all();
        return $onsiteSales;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $onsiteSale = new OnsiteSale();
        $onsiteSale->sale_date = $request->get("sale_date");
        $onsiteSale->gold_price = $request->get("gold_price");
        if ($request->has("payment_method")) $onsiteSale->payment_method = $request->get("payment_method");
        if ($request->has("credit_card_type")) $onsiteSale->credit_card_type = $request->get("credit_card_type");
        if ($request->has("bank_name")) $onsiteSale->bank_name = $request->get("bank_name");
        if ($request->has("paid_amount")) $onsiteSale->paid_amount = $request->get("paid_amount");
        if ($request->has("paid_change")) $onsiteSale->paid_change = $request->get("paid_change");
        if ($request->has("transfer_status")) $onsiteSale->transfer_status = $request->get("transfer_status");
        if ($request->has("transfer_note")) $onsiteSale->transfer_note = $request->get("transfer_note");
        if ($request->has("is_switch_gold")) $onsiteSale->is_switch_gold = $request->get("is_switch_gold");

        $onsiteSale->gold()->associate(Gold::find($request->get("gold_id")));
        $onsiteSale->goldSellPrice()->associate(GoldPrice::find($request->get("gold_sell_price_id")));
        $onsiteSale->employee()->associate(Employee::find($request->get("employee_id")));
        $onsiteSale->user()->associate(User::find($request->get("user_id")));

        if (($request->slip_image) != null) {
            $imageName = time().'.'.$request->slip_image->extension();
            $request->image->storeAs('public/images/onsite_sales', $imageName);
            $onsiteSale->slip_image = $imageName;
        }

        if ($onsiteSale->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created onsite sale id: " . $onsiteSale->id,
                "onsite_sale_id" => $onsiteSale->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Onsite sale creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnsiteSale  $onsiteSale
     * @return \Illuminate\Http\Response
     */
    public function show(OnsiteSale $onsiteSale)
    {
        return $onsiteSale;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OnsiteSale  $onsiteSale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnsiteSale $onsiteSale)
    {
        if ($request->has("sale_date")) $onsiteSale->sale_date = $request->get("sale_date");
        if ($request->has("gold_price")) $onsiteSale->gold_price = $request->get("gold_price");
        if ($request->has("payment_method")) $onsiteSale->payment_method = $request->get("payment_method");
        if ($request->has("credit_card_type")) $onsiteSale->credit_card_type = $request->get("credit_card_type");
        if ($request->has("bank_name")) $onsiteSale->bank_name = $request->get("bank_name");
        if ($request->has("paid_amount")) $onsiteSale->paid_amount = $request->get("paid_amount");
        if ($request->has("paid_change")) $onsiteSale->paid_change = $request->get("paid_change");
        if ($request->has("transfer_status")) $onsiteSale->transfer_status = $request->get("transfer_status");
        if ($request->has("transfer_note")) $onsiteSale->transfer_note = $request->get("transfer_note");
        if ($request->has("is_switch_gold")) $onsiteSale->is_switch_gold = $request->get("is_switch_gold");

        if ($request->has("gold_id")) $onsiteSale->gold()->associate(Gold::find($request->get("gold_id")));
        if ($request->has("gold_sell_price_id")) $onsiteSale->goldSellPrice()->associate(GoldPrice::find($request->get("gold_sell_price_id")));
        if ($request->has("employee_id")) $onsiteSale->employee()->associate(Employee::find($request->get("employee_id")));
        if ($request->has("user_id")) $onsiteSale->user()->associate(User::find($request->get("user_id")));

        if (($request->slip_image) != null && ($request->has("slip_image"))) {
            $imageName = time().'.'.$request->slip_image->extension();
            $request->image->storeAs('public/images/onsite_sales', $imageName);
            $onsiteSale->slip_image = $imageName;
        }

        if ($onsiteSale->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated onsite sale id: " . $onsiteSale->id,
                "onsite_sale_id" => $onsiteSale->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Onsite sale update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnsiteSale  $onsiteSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnsiteSale $onsiteSale)
    {
        $id = $onsiteSale->id;
        if ($onsiteSale->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted onsite sale id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Onsite sale deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
