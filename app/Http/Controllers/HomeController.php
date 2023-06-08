<?php

namespace App\Http\Controllers;
use SoapBox\Formatter\Formatter;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
