<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return $employees;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->nickname = $request->get("nickname");
        $employee->work_start_date = $request->get("work_start_date");
        $employee->birth_date = $request->get("birth_date");
        $employee->salary = $request->get("salary");
        if ($request->has("role")) $employee->role = $request->get("role");
        if ($request->has("work_quit_date")) $employee->work_quit_date = $request->get("work_quit_date");

        if ($employee->save()) {
            return response()->json([
                "success" => true,
                "message" => "Created employee id: " . $employee->id,
                "employee_id" => $employee->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Employee creation failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return $employee;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        if ($request->has("nickname")) $employee->nickname = $request->get("nickname");
        if ($request->has("work_start_date")) $employee->work_start_date = $request->get("work_start_date");
        if ($request->has("birth_date")) $employee->birth_date = $request->get("birth_date");
        if ($request->has("salary")) $employee->salary = $request->get("salary");
        if ($request->has("role")) $employee->role = $request->get("role");
        if ($request->has("work_quit_date")) $employee->work_quit_date = $request->get("work_quit_date");

        if ($employee->save()) {
            return response()->json([
                "success" => true,
                "message" => "Updated employee id: " . $employee->id,
                "employee_id" => $employee->id
            ], Response::HTTP_CREATED);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Employee update failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $id = $employee->id;
        if ($employee->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Deleted employee id: " . $id,
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Employee deletion failed"
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
