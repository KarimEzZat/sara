<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderRequest;
use App\Http\Requests\HeaderUpdateRequest;
use App\Models\Header;

class HeaderController extends Controller
{
    function __construct()
    {
        $this->adminMiddleware();
    }

    public function index()
    {
        $headers = Header::desc()->get();
        return view('admin.header.index', compact('headers'));
    }

    public function create()
    {
        return view('admin.header.create');
    }

    public function store(HeaderRequest $request)
    {
        $input = $request->all();
        $image = $this->uploadSingleFile('image/header', 'image');
        $cv = $this->uploadSingleFile('cv', 'cv');
        $input['image'] = $image;
        $input['cv'] = $cv;
        Header::create($input);
        return redirect()->route('header.index')->with('success', 'Data created successfully');
    }

    public function edit(Header $header)
    {
        return view('admin.header.edit', ['header' => $header]);
    }

    public function update(HeaderUpdateRequest $request, Header $header)
    {
        $input = $request->all();
        $image = $this->uploadSingleFile('image/header', 'image');
        $cv = $this->uploadSingleFile('cv', 'cv');
        if ($image) {
            $this->deleteFile('image/header/', $header->image);
            $input['image'] = $image;
        }
        if ($cv) {
            $this->deleteFile('cv/', $header->cv);
            $input['cv'] = $cv;
        }
        $header->update($input);
        return redirect()->route('header.index')->with('success', 'Data updated successfully');
    }

    public function destroy(Header $header)
    {
        $this->deleteActiveItem($header, 'image/header/', 'image', 'cv/', 'cv');
        return redirect()->route('header.index');
    }
}
