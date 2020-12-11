<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class viewTourController extends Controller
{
    public function getAllTour()
    {
        $tours = Tour::where('tour_status', 'active')->paginate(3);

        return view('viewTour', compact('tours'));
    }
}