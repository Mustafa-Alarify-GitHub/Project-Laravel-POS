<?php

namespace App\Http\Controllers;

use App\Models\Branchs;
use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
          $branches = Branchs::all(); 
    return view('Empleoys.index', compact('employees', 'branches'));
    }

    public function create()
    {
        $branches = Branchs::all(); 
        return view('Empleoys.create', compact('branches'));
    }

    public function store(Request $request)
    {


        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'Address' => $request->Address,
            'phone' => $request->phone,
            'number_job' => $request->number_job,
            'branchs' => $request->branchs,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee added successfully.');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $branches = Branchs::all(); 
        return view('Empleoys.edit', compact('employee', 'branches'));
    }

public function update(Request $request, $id)
{


    $employee = Employee::findOrFail($id);
    $employee->update($request->all());

    return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
}

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
