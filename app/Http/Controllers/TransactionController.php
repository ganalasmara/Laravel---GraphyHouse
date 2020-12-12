<?php

namespace App\Http\Controllers;

use App\photographer;
use App\PhotographerTransaction;
use App\Tour;
use App\TourDetailTransaction;
use App\TourHeaderTransaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function checkout($id)
    {
        $photographer = photographer::where('photographer_id', 'like', $id)->first();

        return view('checkout')->with('photographer', $photographer);
    }

    public function store(Request $request, $id)
    {
        $current = Carbon::now();

        $ptransaction = new PhotographerTransaction();
        
        $ptransaction->customer_id = Auth::id();
        $ptransaction->photographer_id = $id;
        $ptransaction->book_date = $current;
        $ptransaction->work_date = $request['workdate'];
        PhotographerTransaction::create($ptransaction->toArray());
   
        return redirect('/');
    }

    public function tourcheckout($id)
    {
        $tour = Tour::where('tour_id', 'like', $id)->first();

        return view('tourcheckout')->with('tour', $tour);
    }

    public function tourstore(Request $request, $id)
    {
        $current = Carbon::now();

        $tourtransaction = new TourHeaderTransaction();
        
        $tourtransaction->customer_id = Auth::id();
        $tourtransaction->tour_id = $id;
        $tourtransaction->book_date = $current;
        $tourtransaction->start_date = $request['startdate'];
        $tourtransaction->end_date = $request['enddate'];
        PhotographerTransaction::create($tourtransaction->toArray());

        $tourdtransaction = new TourDetailTransaction();

        $headerid = TourHeaderTransaction::orderby('tht_id', 'desc')->first();

        $tourdtransaction->tht_id = $headerid;
        // $tourdtransaction->total_price = ;
   
        return redirect('/');
    }

}
