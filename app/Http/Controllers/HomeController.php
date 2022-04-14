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


    public function privacyPolicy()
    {
        return view('policy');
    }


    public function termsCondition()
    {
        return view('terms');
    }
}
