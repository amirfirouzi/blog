<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password')
        ]);
        return redirect(route('admin.users.index'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin.users.index'));
    }
}
