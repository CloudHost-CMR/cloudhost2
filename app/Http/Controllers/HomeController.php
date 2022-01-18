<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sharedHostingView()
    {
        return view('cloudhost.shared-hosting');
    }

    public function allFeatureView()
    {
        return view('cloudhost.all-feature');
    }
}
