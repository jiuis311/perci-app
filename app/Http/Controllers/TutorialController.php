<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        return view('master');
    }

    public function basicUpsell()
    {
        return view('tutorial.basic-upsell');
    }

    public function basicCrossSell()
    {
        return view('tutorial.basic-cross-sell');
    }

    public function offerBoost()
    {
        return view('tutorial.offer-boost');
    }

    public function popup()
    {
        return view('tutorial.smart-popup');
    }

    public function abTesting()
    {
        return view('tutorial.ab-testing');
    }

    public function reportTutorial()
    {
        return view('tutorial.report');
    }
}
