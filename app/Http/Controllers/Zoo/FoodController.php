<?php

namespace App\Http\Controllers\Zoo;

use App\Http\Controllers\Controller;
use App\Models\AnimlFood;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = AnimlFood::all();
        return view('food', compact('foods'));
    }
}
