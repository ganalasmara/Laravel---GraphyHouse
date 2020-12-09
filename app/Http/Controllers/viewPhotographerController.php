<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewPhotographerController extends Controller
{
    public function getAllPhotographerList(){
        $list = DB::table('photographer')->where('photographer_status','active')->get();
        return view('viewPhotographer', ['photographerList'=>$list]);
    }
}
