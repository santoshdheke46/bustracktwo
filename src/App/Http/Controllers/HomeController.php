<?php

namespace SsGroup\BusTracking\App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('bustracking::home.index');
    }
}
