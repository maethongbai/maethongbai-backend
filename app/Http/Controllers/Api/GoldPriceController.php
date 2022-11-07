<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GoldPrice;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GoldPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gold_prices = GoldPrice::all();
        return $gold_prices;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goldPrice = new GoldPrice();
        $goldPrice->datetime = $request->get("datetime");
        $goldPrice->buy_price = $request->get("buy_price");
        $goldPrice->sell_price = $request->get("sell_price");

        if ($goldPrice->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created gold price id: " . $goldPrice->id,
                "gold_price_id" => $goldPrice->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold price creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoldPrice  $goldPrice
     * @return \Illuminate\Http\Response
     */
    public function show(GoldPrice $goldPrice)
    {
        return $goldPrice;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoldPrice  $goldPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoldPrice $goldPrice)
    {
        if ($request->has("datetime")) $goldPrice->datetime = $request->get("datetime");
        if ($request->has("buy_price")) $goldPrice->buy_price = $request->get("buy_price");
        if ($request->has("sell_price")) $goldPrice->sell_price = $request->get("sell_price");

        if ($goldPrice->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated gold price id: " . $goldPrice->id,
                "gold_price_id" => $goldPrice->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold price update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoldPrice  $goldPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoldPrice $goldPrice)
    {
        $id = $goldPrice->id;
        if ($goldPrice->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted gold price id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold price deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
