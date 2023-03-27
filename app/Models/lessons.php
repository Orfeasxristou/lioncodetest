<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    use HasFactory;


    public function topics(){


    	return $this->belongsTo(topics::class,'lesson_id','id');
    }
}
