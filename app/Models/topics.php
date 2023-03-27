<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topics extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function events(){

    	return $this->belongsTo(Events::class,'topic_id','id');


    }
}
