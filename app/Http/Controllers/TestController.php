<?php

namespace App\Http\Controllers;

use App\Models\CustomOrder;
use App\Models\CustomOrderWorker;
use App\Models\Employee;
use App\Models\Gold;
use App\Models\GoldPattern;
use App\Models\GoldPrice;
use App\Models\GoldType;
use App\Models\Income;
use App\Models\OnlineSale;
use App\Models\OnsiteSale;
use App\Models\Redemption;
use App\Models\User;
use App\Models\Wholesale;
use App\Models\Withdrawal;
use Cassandra\Custom;
use Database\Seeders\WithdrawalSeeder;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $cows = CustomOrderWorker::all();
        $gold_patterns = GoldPattern::all();
        $gold_prices = GoldPrice::all();
        $gold_types = GoldType::all();
        $wholesales = Wholesale::all();
        $employees = Employee::all();
        $gold_ls = Gold::all();
        $reds = Redemption::all();
        $onss_ls = OnsiteSale::all();
        $income_ls = Income::all();
        $wd_ls = Withdrawal::all();
        $onls_ls = OnlineSale::all();
        $co_ls = CustomOrder::all();
        return view("test", [
            "users" => $users,
            "cows" => $cows,
            "gold_patterns" => $gold_patterns,
            "gold_prices" => $gold_prices,
            "gold_types" => $gold_types,
            "wholesales" => $wholesales,
            "employees" => $employees,
            "gold_ls" => $gold_ls,
            "reds" => $reds,
            "onss_ls" => $onss_ls,
            "income_ls" => $income_ls,
            "wd_ls" => $wd_ls,
            "onls_ls" => $onls_ls,
            "co_ls" => $co_ls
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
