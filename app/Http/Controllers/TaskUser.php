<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskUser extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('taskUsers.index',['user'=>$user]);
    }

    public function create()
    {
        return view('taskUsers.index');
    }

    public function store(Request $request) {

    }

    public function show(TaskUser $taskUser) {

    }

    public function edit(TaskUser  $taskUser) {
        return view('taskUser.edit',['taskUser' => $taskUser]);
    }

    public function update(Request $request, TaskUser $taskUser) {

    }

    public function destroy(TaskUser $taskUser) {
        $taskUser->delete();
        return redirect('/board/{board}');
    }
}
