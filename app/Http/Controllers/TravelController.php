<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * TRAVELS
     */
    public function index(){
        return view('travels');
    }
}
