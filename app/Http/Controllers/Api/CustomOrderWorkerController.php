<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CustomOrderWorker;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomOrderWorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custom_order_workers = CustomOrderWorker::all();
        return $custom_order_workers;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $custom_order_worker = new CustomOrderWorker();
        $custom_order_worker->name = $request->get("name");
        $custom_order_worker->phone = $request->get("phone");

        if ($custom_order_worker->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created custom order worker id: " . $custom_order_worker->id,
                "custom_order_worker_id" => $custom_order_worker->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Custom order worker creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomOrderWorker  $custom_order_worker
     * @return \Illuminate\Http\Response
     */
    public function show(CustomOrderWorker $custom_order_worker)
    {
        return $custom_order_worker;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomOrderWorker  $custom_order_worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomOrderWorker $custom_order_worker)
    {
        if ($request->has("name")) $custom_order_worker->name = $request->get("name");
        if ($request->has("phone")) $custom_order_worker->phone = $request->get("phone");

        if ($custom_order_worker->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated custom order worker id: " . $custom_order_worker->id,
                "custom_order_worker_id" => $custom_order_worker->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Custom order worker update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomOrderWorker  $custom_order_worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomOrderWorker $custom_order_worker)
    {
        $id = $custom_order_worker->id;
        if ($custom_order_worker->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted custom order worker id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Custom order worker deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
