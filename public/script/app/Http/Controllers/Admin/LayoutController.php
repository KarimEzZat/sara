<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    public function header()
    {
        $headers = $this->orderDescending('headers');
        return view('admin.layout.header', ['headers' => $headers]);
    }

    public function setHeader()
    {
        $this->activeItem('Header is enabled', 'At least one  Header should be active', 'headers');
    }

    public function about()
    {
        $abouts = $this->orderDescending('about');
        return view('admin.layout.about', ['abouts' => $abouts]);
    }

    public function setAbout()
    {
        $this->activeItem('About is enabled', 'At least one  About should be active', 'about');
    }

    public function footer()
    {
        $footers = $this->orderDescending('footers');
        return view('admin.layout.footer', ['footers' => $footers]);
    }

    public function setFooter()
    {
        $this->activeItem('Footer is enabled', 'At least one  Footer should be active', 'footers');
    }
}
