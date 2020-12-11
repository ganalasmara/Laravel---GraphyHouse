<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class viewTourDetailController extends Controller
{
    public function getTourDetail($tourID)
    {
        $details = Tour::where('tour_id', $tourID)->get();

        return view('viewTourDetail', compact('details'));
    }
}