<?php

namespace Lexbook\Http\Controllers;

use Illuminate\Http\Request;

use Lexbook\User;
use Lexbook\Http\Requests;
use Lexbook\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function getProfile($username)
    {
        $user = User::where("username", $username)->first();

        if (!$user) {
            abort(404);
        }

        return view('profile.index')
            ->with('user', $user);
    }
}
