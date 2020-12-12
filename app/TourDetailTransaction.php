<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDetailTransaction extends Model
{
    protected $table = 'tourdetailtransaction';
    protected $fillable = [
        'tht_id','total_price'
    ];
}
