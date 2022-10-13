<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        if ($request->has("email")) $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->name_prefix = $request->get("name_prefix");
        $user->first_name = $request->get("first_name");
        $user->last_name = $request->get("last_name");
        $user->phone = $request->get("phone");
        if ($request->has("id_card_number")) $user->id_card_number = $request->get("id_card_number");
        if ($request->has("address")) $user->address = $request->get("address");

        if ($user->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created user id: " . $user->id,
                "user_id" => $user->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "User creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->has("email")) $user->email = $request->get("email");
        if ($request->has("password")) $user->password = $request->get("password");
        if ($request->has("name_prefix")) $user->name_prefix = $request->get("name_prefix");
        if ($request->has("first_name")) $user->first_name = $request->get("first_name");
        if ($request->has("last_name")) $user->last_name = $request->get("last_name");
        if ($request->has("phone")) $user->phone = $request->get("phone");
        if ($request->has("id_card_number")) $user->id_card_number = $request->get("id_card_number");
        if ($request->has("address")) $user->address = $request->get("address");
        if ($request->has("role")) $user->role = $request->get("role");

        if ($request->has("employee_id")) $user->employee()->associate(Employee::find($request->get("employee_id")));

        if ($user->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated user id: " . $user->id,
                "user_id" => $user->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "User update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $id = $user->id;
        if ($user->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted user id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "User deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
