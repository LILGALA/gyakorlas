<?php

use App\Http\Controllers\TeachersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    "prefix"=>"teachers",
    "controller"=>TeachersController::class
], function(){
    Route::get('/', 'getTeacher');
    Route::post('/create', 'createTeacher');
    Route::put('/update/{teachers}', 'updateTeacher');
    Route::delete('/delete/{teachers}', 'deleteTeacher');
});