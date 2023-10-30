<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class LandingPage extends Controller
{
    public function index()
    {
        $title = 'Ais Parfume';

        $agent = new Agent();

        if ($agent->isMobile()) {
            return view('landing-page/mobile/index',compact('title'));
        }

        return view('landing-page/desktop/index',compact('title'));
    }
}
