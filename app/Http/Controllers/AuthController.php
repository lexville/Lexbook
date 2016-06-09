<?php

namespace Lexbook\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Lexbook\User;
use Lexbook\Http\Requests;
use Lexbook\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getSignUp()
    {
        return view('auth.signup');
    }

    public function postSignUp(Request $request)
    {
        // Validate information provided
        $this->validate($request, [
            'email'    => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
            'password-confirmation' => 'required|same:password'
        ]);
        // create the new user in the database once validation has occured
        User::create([
            'email'    => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password'))
        ]);
        // Provide a sweet alert pop up
        alert()->success('Your account has been created and you can now log in', 'Success');
        return redirect()->route('home');
    }

   /**
   * Display login page.
   *
   * @return login view.
   */
    public function getLogin()
    {
        return view('auth.login');
    }
    /**
     * Authenticates user and then logs in the user
     *
     * @param  Request $request
     */
    public function postLogin(Request $request)
    {
        // Validate the information given
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (! Auth::attempt($request->only(['email', 'password']))) {
            /**
             * Provide an alert informing user that his/her credentials don't match
             * the database records
             */
            alert()->error('Could not log you in with those credentials', 'Sorry');
            // If auth has failled redirect back to login
            return redirect()->route('login');
        }
        // If auth is successfull redirect back to the homepage
        return redirect()->route('home');
    }
}
