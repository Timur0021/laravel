<?php

namespace App\Http\Controllers\Zoo;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        return view('employees', compact('employees'));
    }
}
