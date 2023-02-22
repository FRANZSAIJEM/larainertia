<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function employee(){
        $employees = Employee::orderBy('last_name')->get();

        return inertia("Employees",[
            'employees' => $employees
        ]);
    }
}
