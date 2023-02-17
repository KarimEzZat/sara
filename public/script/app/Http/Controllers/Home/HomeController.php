<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;

class HomeController extends Controller
{
    protected $home;

    public function index()
    {
        $home = new Home();
        return view('home.index', [
            'getHeader' => $home->getHeader(),
            'getAbout' => $home->getAbout(),
            'getFooter' => $home->getFooter(),
            'getSkills' => $home->getSkills(),
            'getPortfolio' => $home->getPortfolio(),
            'getSetting' => $home->getSetting(),
            'getSeos' => $home->getSeos(),
            'getSocials' => $home->getSocials(),
            'getServices' => $home->getServices(),
            'getExperiences' => $home->getExperiences(),
            'getEducations' => $home->getEducations(),
            'getTestimonials' => $home->getTestimonials(),
            'getCounters' => $home->getCounters(),
            'getBlogs' => $home->getBlogs(),
            'getWorks' => $home->getWorks()
        ]);
    }
}
