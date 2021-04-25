<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function browse_tournaments()
    {
        return view('frontend.browse_tournaments');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact_us()
    {
        return view('frontend.contact_us');
    }

    public function forums()
    {
        return view('frontend.forums');
    }
}
