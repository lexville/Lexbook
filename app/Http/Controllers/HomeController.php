<?php

namespace Lexbook\Http\Controllers;

use Illuminate\Http\Request;

use Lexbook\Http\Requests;
use Lexbook\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
