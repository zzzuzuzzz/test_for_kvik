<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/tasks/{group_id}', \App\Http\Controllers\API\Task\ShowController::class);
Route::post('/tasks/{group_id}', \App\Http\Controllers\API\Task\StoreController::class);
Route::patch('/tasks/{task_id}', \App\Http\Controllers\API\Task\UpdateController::class);
Route::post('/tasks/done/{task_id}', \App\Http\Controllers\API\Task\DoneController::class);
Route::delete('/tasks/{task_id}', \App\Http\Controllers\API\Task\DeleteController::class);

