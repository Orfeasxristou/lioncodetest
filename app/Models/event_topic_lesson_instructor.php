<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_topic_lesson_instructor extends Model
{
    use HasFactory;

     protected $guarded = [];

public function event_topic_lesson_instructor(){

return $this->belongsTo(Events::class,'event_id','id');
return $this->belongsTo(topic::class,'topic_id','id');
return $this->belongsTo(lessons::class,'lesson_id','id');
return $this->belongsTo(instructor::class,'instructor_id','id');



}



}
