<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    function __construct()
    {
        $this->adminMiddleware();
    }

    public function index()
    {
        $abouts = About::desc()->get();
        return view('admin.about.index', ['abouts' => $abouts]);
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(AboutRequest $request)
    {
        $input = $request->all();
        $image = $this->uploadSingleFile('image/about', 'image');
        $input['image'] = $image;
        About::create($input);
        return redirect()->route('about.index')->with('success', 'Data created successfully');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', ['about' => $about]);
    }

    public function update(UpdateAboutRequest $request, About $about)
    {
        $input = $request->all();
        $image = $this->uploadSingleFile('image/about', 'image');
        if ($image) {
            $this->deleteFile('image/about/', $about->image);
            $input['image'] = $image;
        }
        $about->update($input);
        return redirect()->route('about.index')->with('success', 'Data updated successfully');
    }

    public function destroy(About $about)
    {
        $this->deleteActiveItem($about, 'image/about/', 'image');
        return redirect()->route('about.index');
    }
}
