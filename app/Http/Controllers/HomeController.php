<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class HomeController extends Controller
{
//
//    public function __construct(){
//
//        $this->middleware('verified');
//
//    }

    public function index()
    {
        $brands = Brand::active()->get();
        return view('front.home', compact('brands'));
    }

}
