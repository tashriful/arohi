<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tourGuideController extends Controller
{
    public function index()
    {
        return view('frontend.pages.tourGuide');
    }
}
