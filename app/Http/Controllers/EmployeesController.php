<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function showEmployee(int $emp_no, $slug){
            $employees=$objEmployee = Employee::find($emp_no);
            if(!$objEmployee){
                return abort(404);
            }
            return view('pages.show_employee',['employees' => $employees]);
    }
}
