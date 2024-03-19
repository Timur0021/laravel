<?php

namespace App\Http\Controllers\Zoo;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Employees;
use Illuminate\Http\Request;

class ZooController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        $animals = Animal::all();
        return view('zoo', compact('employees', 'animals'));
    }
}
