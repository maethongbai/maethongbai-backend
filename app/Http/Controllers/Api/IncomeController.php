<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\IncomeResource;
use App\Models\Employee;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::all();
        return IncomeResource::collection($incomes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $income = new Income();
        $income->name = $request->get("name");
        $income->amount = $request->get("amount");
        if ($request->has("note")) $income->note = $request->get("note");
        $income->transaction_date = $request->get("transaction_date");

        $income->employee()->associate(Employee::find($request->get("employee_id")));

        if ($income->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created income id: " . $income->id,
                "income_id" => $income->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Income creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        return new IncomeResource($income);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        if ($request->has("name")) $income->name = $request->get("name");
        if ($request->has("amount")) $income->amount = $request->get("amount");
        if ($request->has("note")) $income->note = $request->get("note");
        if ($request->has("transaction_date")) $income->transaction_date = $request->get("transaction_date");

        if ($request->has("employee_id")) $income->employee()->associate(Employee::find($request->get("employee_id")));

        if ($income->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated income id: " . $income->id,
                "income_id" => $income->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Income update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        $id = $income->id;
        if ($income->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted income id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Income deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
