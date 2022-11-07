<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GoldType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GoldTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goldTypes = GoldType::all();
        return $goldTypes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goldType = new GoldType();
        $goldType->name = $request->get("name");

        if ($goldType->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created gold type id: " . $goldType->id,
                "gold_type_id" => $goldType->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold type creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoldType  $goldType
     * @return \Illuminate\Http\Response
     */
    public function show(GoldType $goldType)
    {
        return $goldType;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoldType  $goldType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoldType $goldType)
    {
        if ($request->has("name")) $goldType->name = $request->get("name");

        if ($goldType->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated gold type id: " . $goldType->id,
                "gold_type_id" => $goldType->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold type update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoldType  $goldType
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoldType $goldType)
    {
        $id = $goldType->id;
        if ($goldType->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted gold type id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Gold type deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
