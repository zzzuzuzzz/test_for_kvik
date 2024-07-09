<?php

namespace App\Http\Controllers\API\Task;

use App\Http\Controllers\Controller;
use App\Http\Resources\Task\ShowAllTasks;
use App\Models\Task;

class ShowController extends Controller
{
    public function __invoke($group_id) {
        $tasks = Task::where('group_id', $group_id)->get();
        return ShowAllTasks::collection($tasks);
    }
}
