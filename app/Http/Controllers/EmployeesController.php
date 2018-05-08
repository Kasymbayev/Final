<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function showEmployee(int $emp_no, $slug){
            $employees=$objEmployee = Employee::find($emp_no);
            $salaries = $objSalary = Salary::find($emp_no);
            if(!$objEmployee){
                return abort(404);
            }
            return view('pages.show_employee',['employees' => $employees,'salaries'=>$salaries]);
    }
}
