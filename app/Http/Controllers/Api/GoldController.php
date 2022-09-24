<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gold;
use App\Models\GoldPattern;
use App\Models\GoldPrice;
use App\Models\GoldType;
use App\Models\Wholesale;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $golds = Gold::all();
        return $golds;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gold = new Gold();
        $gold->name = $request->get("name");
        $gold->weight = $request->get("weight");
        if ($request->has("custom_weight")) $gold->custom_weight = $request->get("custom_weight");
        if ($request->has("pattern_type")) $gold->pattern_type = $request->get("pattern_type");
        $gold->size = $request->get("size");
        $gold->pension_per_piece = $request->get("pension_per_piece");
        $gold->amount = $request->get("amount");
        $gold->import_date = $request->get("import_date");
        if ($request->has("percentage")) $gold->percentage = $request->get("percentage");
        $gold->brand = $request->get("brand");

        $gold->goldType()->associate(GoldType::find($request->get("gold_type_id")));
        $gold->goldPattern()->associate(GoldPattern::find($request->get("gold_pattern_id")));
        $gold->wholesale()->associate(Wholesale::find($request->get("wholesale_id")));
        $gold->goldBuyPrice()->associate(GoldPrice::find($request->get("gold_buy_price_id")));

        if ($request->image != null) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images/golds', $imageName);
            $gold->image = $imageName;
        }

        if ($gold->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created gold id: " . $gold->id,
                "gold_id" => $gold->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gold  $gold
     * @return \Illuminate\Http\Response
     */
    public function show(Gold $gold)
    {
        return $gold;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gold  $gold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gold $gold)
    {
        if ($request->has("name")) $gold->name = $request->get("name");
        if ($request->has("weight")) $gold->weight = $request->get("weight");
        if ($request->has("custom_weight")) $gold->custom_weight = $request->get("custom_weight");
        if ($request->has("pattern_type")) $gold->pattern_type = $request->get("pattern_type");
        if ($request->has("size")) $gold->size = $request->get("size");
        if ($request->has("pension_per_piece")) $gold->pension_per_piece = $request->get("pension_per_piece");
        if ($request->has("amount")) $gold->amount = $request->get("amount");
        if ($request->has("import_date")) $gold->import_date = $request->get("import_date");
        if ($request->has("percentage")) $gold->percentage = $request->get("percentage");
        if ($request->has("brand")) $gold->brand = $request->get("brand");

        if ($request->has("gold_type_id")) $gold->goldType()->associate(GoldType::find($request->get("gold_type_id")));
        if ($request->has("gold_pattern_id")) $gold->goldPattern()->associate(GoldPattern::find($request->get("gold_pattern_id")));
        if ($request->has("wholesale_id")) $gold->wholesale()->associate(Wholesale::find($request->get("wholesale_id")));
        if ($request->has("gold_buy_price")) $gold->goldBuyPrice()->associate(GoldPrice::find($request->get("gold_buy_price_id")));

        if (($request->image != null) && ($request->has("image"))){
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images/golds', $imageName);
            $gold->image = $imageName;
        }

        if ($gold->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated gold id: " . $gold->id,
                "gold_id" => $gold->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gold  $gold
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gold $gold)
    {
        $id = $gold->id;
        if ($gold->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted gold id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}