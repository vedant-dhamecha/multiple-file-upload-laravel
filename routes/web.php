<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/file',function(){
    return view('files');
});

Route::post('/file',[FileController::class,'fileUpload']);