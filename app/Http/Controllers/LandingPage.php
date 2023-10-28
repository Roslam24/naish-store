<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function index()
    {
        $title = 'Naish';
        return view('landing-page/index',compact('title'));
    }
}
