<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){
        $objEmployees = new Employee();
        $employees = $objEmployees->get();
        return view('pages.personals',['employees' => $employees]);
    }
}
