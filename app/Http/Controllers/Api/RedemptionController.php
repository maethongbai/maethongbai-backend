<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RedemptionResource;
use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPrice;
use App\Models\Redemption;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RedemptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redemptions = Redemption::all();
        return RedemptionResource::collection($redemptions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $redemption = new Redemption();
        $redemption->redemption_date = $request->get("redemption_date");
        $redemption->redemption_price = $request->get("redemption_price");
        if ($request->has("check_status")) $redemption->check_status = $request->get("check_status");
        if ($request->has("note")) $redemption->check_status = $request->get("note");

        $redemption->gold()->associate(Gold::find($request->get("gold_id")));
        $redemption->goldRedemptionPrice()->associate(GoldPrice::find($request->get("gold_redemption_price_id")));
        $redemption->employee()->associate(Employee::find($request->get("employee_id")));
        $redemption->user()->associate(User::find($request->get("user_id")));

        if (($request->id_card_image) != null) {
            $imageName = time().'.'.$request->id_card_image->extension();
            $request->image->storeAs('public/images/redemptions', $imageName);
            $redemption->slip_image = $imageName;
        }

        if ($redemption->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created redemption id: " . $redemption->id,
                "redemption_id" => $redemption->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Redemption creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Redemption  $redemption
     * @return \Illuminate\Http\Response
     */
    public function show(Redemption $redemption)
    {
        return new RedemptionResource($redemption);
//        return $redemption;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Redemption  $redemption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redemption $redemption)
    {
        if ($request->has("redemption_date")) $redemption->redemption_date = $request->get("redemption_date");
        if ($request->has("redemption_price")) $redemption->redemption_price = $request->get("redemption_price");
        if ($request->has("check_status")) $redemption->check_status = $request->get("check_status");
        if ($request->has("note")) $redemption->check_status = $request->get("note");

        if ($request->has("gold_id")) $redemption->gold()->associate(Gold::find($request->get("gold_id")));
        if ($request->has("gold_redemption_price_id")) $redemption->goldRedemptionPrice()->associate(GoldPrice::find($request->get("gold_redemption_price_id")));
        if ($request->has("employee_id")) $redemption->employee()->associate(Employee::find($request->get("employee_id")));
        if ($request->has("user_id")) $redemption->user()->associate(User::find($request->get("user_id")));

        if (($request->id_card_image) != null && ($request->has("id_card_image"))) {
            $imageName = time().'.'.$request->id_card_image->extension();
            $request->image->storeAs('public/images/redemptions', $imageName);
            $redemption->slip_image = $imageName;
        }

        if ($redemption->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated redemption id: " . $redemption->id,
                "redemption_id" => $redemption->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Redemption updated failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Redemption  $redemption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redemption $redemption)
    {
        $id = $redemption->id;
        if ($redemption->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted redemption id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Redemption deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
