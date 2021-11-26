<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatianagraficiController;





Route::get('/',[DatianagraficiController::class, 'index']);
Route::post('/',[DatianagraficiController::class, 'store']);


