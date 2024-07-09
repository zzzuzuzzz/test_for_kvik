<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/tasks/{group_id}', \App\Http\Controllers\API\Task\ShowController::class);

