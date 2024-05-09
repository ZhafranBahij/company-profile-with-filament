<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Company;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function LandingPage(){

        $company = Company::first();
        $about_us = AboutUs::first();
        $banners = Banner::all();
        return view('landing-page', [
            'company' => $company,
            'about_us' => $about_us,
            'banners' => $banners,
        ]);
    }
}
