<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotographerTransaction extends Model
{
    protected $table = 'photographerheadertransaction';
    
    protected $fillable = [
        'customer_id','photographer_id','book_date','work_date'
    ];

}
