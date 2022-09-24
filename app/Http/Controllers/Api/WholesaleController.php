<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wholesale;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WholesaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wholesales = Wholesale::all();
        return $wholesales;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wholesale = new Wholesale();
        $wholesale->name = $request->get("name");
        $wholesale->phone = $request->get("phone");
        $wholesale->address = $request->get("address");

        if ($wholesale->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created wholesale id: " . $wholesale->id,
                "wholesale_id" => $wholesale->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Wholesale creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function show(Wholesale $wholesale)
    {
        return $wholesale;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wholesale $wholesale)
    {
        if ($request->has("name")) $wholesale->name = $request->get("name");
        if ($request->has("phone")) $wholesale->phone = $request->get("phone");
        if ($request->has("address")) $wholesale->address = $request->get("address");

        if ($wholesale->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated wholesale id: " . $wholesale->id,
                "wholesale_id" => $wholesale->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Wholesale update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wholesale $wholesale)
    {
        $id = $wholesale->id;
        if ($wholesale->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted wholesale id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Wholesale deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
