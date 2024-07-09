<?php

use App\Events\notification;
use App\Http\Controllers\RTCController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/event', function () {
    return view("eventTrigger");
});

Route::post('/event', function (Request $request) {
    $message = $request->message;

    event(new notification($message));
    return response()->json($message);
});

Route::get('/rtc',[RTCController::class,'index']);
Route::post('/rtc/auth',[RTCController::class,'auth']);

