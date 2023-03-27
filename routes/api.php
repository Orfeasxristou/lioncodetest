<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\getCompanies;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\getEventsTopicsLessonsInstructors;




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Public Routes
Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/events',[EventsController::class,'index']);
Route::get('/events_topic_lessons_instructors',[getEventsTopicsLessonsInstructors::class,'index']);
//Protected Routes
Route::group(['middleware'=>['auth:sanctum']],function(){
Route::resource('/getcompanies',getCompanies::class);
});