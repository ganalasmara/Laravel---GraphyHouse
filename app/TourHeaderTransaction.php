<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourHeaderTransaction extends Model
{
    protected $table = 'tourheadertransaction';
    protected $fillable = [
        'customer_id','tour_id','book_date','start_date'
    ];
}
