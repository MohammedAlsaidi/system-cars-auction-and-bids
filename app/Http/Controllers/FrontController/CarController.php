<?php

namespace App\Http\Controllers\FrontController;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Checkup;
use Illuminate\Http\Request;

class CarController extends Controller
{



    public function index(Request $request)
    {
        $cars = Car::with('brand', 'model')->where(function ($query) use ($request) {
            $query->when($request->search, function ($q) use ($request) {
                return $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhereHas('brand', function ($query) use ($request) {
                        $query->where('name', 'like', '%' . $request->search . '%');
                    });
            });
        })->get();
        return view('front.car.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::with('checkup','images_checkups')->find($id);

        return view('front.car.car_details', compact('car'));
    }

    public function Filter_Cars($is_status)
    {
        $cars = Car::with('model', 'brand')
            ->orderBy('id', 'DESC')
            ->where('is_status', '=', $is_status)
            ->active()
            ->get();

        return view('front.car.index', compact('cars'))->withDetails($cars);

    }
}
