<?php

namespace App\Http\Controllers;

use App\photoCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewDetailPhotographerController extends Controller
{

    public function getDetailPhotographer($id){
        $data = DB::table('photographer')->where('photographer_id',$id)->first();
        $list = photoCollection::all()->where('photographer_id',$id);
        return view('viewPhotographerDetail', ['data'=>$data, 'imgList'=>$list]);
    }
}
