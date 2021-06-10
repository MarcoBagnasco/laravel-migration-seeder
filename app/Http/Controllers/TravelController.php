<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;


class TravelController extends Controller
{
    /**
     * TRAVELS
     */
    public function index(){
        $travels = Travel::simplePaginate(10);

        return view('travels', compact('travels'));
    }
}
