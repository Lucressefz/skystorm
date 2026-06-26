<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::orderBy('name')
                ->where('id', '!=', auth()->user()->id)
                ->get(),
        ]);
    }

    public function profile(User $user)
    {
        $profileUser = $user;
        $isFollowing = auth()->user()->followings->contains($user->id);
        $posts = $user->posts()->latest()->get();
        return view('users.profile', compact('profileUser', 'isFollowing', 'posts'));
    }

    public function followers()
    {
        $followers = auth()->user()->followers;
        return view('users.followers', compact('followers'));
    }

    public function followings()
    {
        $followings = auth()->user()->followings;
        return view('users.followings', compact('followings'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return __FUNCTION__;
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
