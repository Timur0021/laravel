<?php

namespace App\Http\Controllers\Zoo;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animal', compact('animals'));
    }
}
