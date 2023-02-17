<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class Home extends BaseModel
{

    public function getHeader()
    {
        return Header::where('is_active', 1)->first();
    }

    public function getAbout()
    {
        return About::where('is_active', 1)->first();
    }

    public function getFooter()
    {
        return Footer::where('is_active', 1)->first();
    }

    public function getSkills()
    {
        return Skill::all()->take(5);
    }

    public function getPortfolio()
    {
        return Work::all();
    }

    public function getSetting()
    {
        return DB::table('settings')->first();
    }

    public function getSeos()
    {
        return Seo::all();
    }

    public function getSocials()
    {
        return Social::desc()->get()->take(5);
    }

    public function getServices()
    {
        return Service::desc()->get();
    }

    public function getExperiences()
    {
        return Experience::desc()->get();
    }

    public function getEducations()
    {
        return Education::desc()->get();
    }

    public function getTestimonials()
    {
        return Testimonial::desc()->get()->take(3);
    }

    public function getCounters()
    {
        return Counter::desc()->get();
    }

    public function getBlogs()
    {
        return Blog::desc()->get();
    }

    public function getWorks()
    {
        return Work::desc()->get();
    }

}
