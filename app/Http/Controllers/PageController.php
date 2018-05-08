<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function personals(){
        $employees = DB::table('employees')->paginate(10);
        return view('pages.personals', ['employees' => $employees]);
    }
}
