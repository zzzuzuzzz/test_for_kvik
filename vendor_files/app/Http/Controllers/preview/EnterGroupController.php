<?php

namespace App\Http\Controllers\preview;

use App\Http\Controllers\Controller;
use App\Http\Requests\preview\EnterGroupStoreRequest;
use App\Models\Group;
use App\Models\Role;
use App\Models\User;

class EnterGroupController extends Controller
{
    public function __invoke(EnterGroupStoreRequest $request, User $user)
    {
        $date = $request->validated();
        $group = Group::find($date['group_id']);
        if (!$group) {
            return back()->with('status', 'К сожалению не удалось найти группу. Проверьте индификатор группы, запросите приглашение от группы или обратитесь в службу поддержки.');

        } else {
            Role::firstOrCreate([
                'user_id' => $user->id,
                'group_id' => $group->id,
                'entered' => false
            ],[
                'user_id' => $user->id,
                'group_id' => $group->id,
                'role' => 'user',
                'entered' => false
            ]);
        }
        return view('preview.searchGroup');
    }
}
