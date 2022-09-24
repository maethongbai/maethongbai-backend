<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GoldPattern;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GoldPatternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gold_patterns = GoldPattern::all();
        return $gold_patterns;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goldPattern = new GoldPattern();
        $goldPattern->name = $request->get("name");

        if ($goldPattern->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created gold pattern id: " . $goldPattern->id,
                "gold_pattern_id" => $goldPattern->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold pattern creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoldPattern  $goldPattern
     * @return \Illuminate\Http\Response
     */
    public function show(GoldPattern $goldPattern)
    {
        return $goldPattern;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoldPattern  $goldPattern
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoldPattern $goldPattern)
    {
        if ($request->has("name")) $goldPattern->name = $request->get("name");

        if ($goldPattern->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated gold pattern id: " . $goldPattern->id,
                "gold_pattern_id" => $goldPattern->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold pattern update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoldPattern  $goldPattern
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoldPattern $goldPattern)
    {
        $id = $goldPattern->id;
        if ($goldPattern->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted gold pattern id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold pattern deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
