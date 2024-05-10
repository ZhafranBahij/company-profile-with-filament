<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Project;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function LandingPage(){

        $company = Company::first();

        $about_us = AboutUs::first();

        $banners = Banner::all();

        $projects = Project::query()
                        ->latest()
                        ->limit(4)
                        ->get();

        $articles = Article::query()
                        ->latest()
                        ->limit(4)
                        ->get();

        $partners = Partner::query()
                        ->get();

        $faqs = Faq::query()
                    ->get();

        return view('landing-page', [
            'company' => $company,
            'about_us' => $about_us,
            'banners' => $banners,
            'projects' => $projects,
            'articles' => $articles,
            'partners' => $partners,
            'faqs' => $faqs,
        ]);
    }
}
