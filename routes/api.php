<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/", function () {
    return [
        'version' => "1.0.0"
    ];
});

Route::apiResources([
    "/custom_orders" => \App\Http\Controllers\Api\CustomOrderController::class,
    "/custom_order_workers" => \App\Http\Controllers\Api\CustomOrderWorkerController::class,
    "/employees" => \App\Http\Controllers\Api\EmployeeController::class,
    "/golds" => \App\Http\Controllers\Api\GoldController::class,
    "/gold_patterns" => \App\Http\Controllers\Api\GoldPatternController::class,
    "/gold_prices" => \App\Http\Controllers\Api\GoldPriceController::class,
    "/gold_types" => \App\Http\Controllers\Api\GoldTypeController::class,
    "/incomes" => \App\Http\Controllers\Api\IncomeController::class,
    "/online_sales" => \App\Http\Controllers\Api\OnlineSaleController::class,
    "/onsite_sales" => \App\Http\Controllers\Api\OnsiteSaleController::class,
    "/redemptions" => \App\Http\Controllers\Api\RedemptionController::class,
    "/users" => \App\Http\Controllers\Api\UserController::class,
    "/wholesales" => \App\Http\Controllers\Api\WholesaleController::class,
    "/withdrawals" => \App\Http\Controllers\Api\WithdrawalController::class
]);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});
