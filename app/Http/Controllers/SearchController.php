<?php

namespace Lexbook\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Lexbook\User;
use Lexbook\Http\Requests;
use Lexbook\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Search method
     *
     * @return serch view
     */

    public function getSearchResults(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return redirect()->route('home');
        }

        $users = User::where('username', 'LIKE', "%{$query}%")
                      ->orWhere(
                          DB::raw(
                              "CONCAT(first_name,' ',last_name)"
                          ),
                          'LIKE',
                          "%{$query}%"
                      )
                      ->get();
        return view('search.results')->with('users', $users);
    }
}
