<?php

namespace App\Http\Controllers;
use App\Models\Employee;


use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {

        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function edit($id) {

        $employee = Employee::findOrFail($id); // Fetch employee by ID
        return view('employees.edit', compact('employee')); // Pass the data to the view
    }

    public function update(Request $request, $id) {

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:65',
            'salary' => 'required|numeric|min:0',
            'email' => 'required|email|unique:employees,email,' . $id,
            'phone_number' => 'required|string|unique:employees,phone_number,' . $id,
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->only([
            'name', 'address', 'age', 'salary', 'email', 'phone_number'
        ]));

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

}
