<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WithdrawalResource;
use App\Models\Employee;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdrawals = Withdrawal::all();
        return WithdrawalResource::collection($withdrawals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $withdrawal = new Withdrawal();
        $withdrawal->name = $request->get("name");
        $withdrawal->amount = $request->get("amount");
        $withdrawal->withdrawal_date = $request->get("withdrawal_date");
        if ($request->has("withdrawal_status")) $withdrawal->withdrawal_status = $request->get("withdrawal_status");

        $withdrawal->employee()->associate(Employee::find($request->get("employee_id")));
        $withdrawal->withdrawalEmployee()->associate(Employee::find($request->get("withdrawals_employee_id")));

        if ($withdrawal->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created withdrawal id: " . $withdrawal->id,
                "withdrawal_id" => $withdrawal->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Withdrawal creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function show(Withdrawal $withdrawal)
    {
        return new WithdrawalResource($withdrawal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdrawal $withdrawal)
    {
        if ($request->has("name")) $withdrawal->name = $request->get("name");
        if ($request->has("amount"))$withdrawal->amount = $request->get("amount");
        if ($request->has("withdrawal_date")) $withdrawal->withdrawal_date = $request->get("withdrawal_date");
        if ($request->has("withdrawal_status")) $withdrawal->withdrawal_status = $request->get("withdrawal_status");

        if ($request->has("employee_id")) $withdrawal->employee()->associate(Employee::find($request->get("employee_id")));
        if ($request->has("withdrawals_employee_id")) $withdrawal->withdrawalEmployee()->associate(Employee::find($request->get("withdrawals_employee_id")));

        if ($withdrawal->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated withdrawal id: " . $withdrawal->id,
                "withdrawal_id" => $withdrawal->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Withdrawal update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withdrawal $withdrawal)
    {
        $id = $withdrawal->id;
        if ($withdrawal->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted withdrawal id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Withdrawal deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
