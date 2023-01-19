<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function showAll()
    {
        return Employee::all();
    }

    public function createEmployee(Request $request)
    {
         return Employee::create([
        'name' => $request->name,
        'address' => $request->address,
        'user_id' => $request->user_id
        ]);
    }
    public function showById($id)
    {
        return Employee::where('id', $id)->first();

    }
    public function updateEmployee(Request $request, $id)
    {
        //find the Employee youre going to update
        Employee::find($id)->update([
            'name' => $request->name,
            'address' => $request->address
        ]);
    }
    public function deleteEmployee($id)
    {
        return Employee::find($id)->delete();
    }
}
