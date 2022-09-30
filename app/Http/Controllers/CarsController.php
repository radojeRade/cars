<?php

namespace App\Http\Controllers;
use App\Models\Car;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    //
    public function index(){
        $cars = Car::all();
         return view('cars.index', compact('cars'));
    }

    public function show($id){
        $car = Car::find($id);

        return view('cars.show', compact('car'));
    }
}
