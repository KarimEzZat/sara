<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FooterRequest;
use App\Models\Footer;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->adminMiddleware();
    }

    public function index()
    {
        $footers = Footer::desc()->get();
        return view('admin.footer.index', compact('footers'));
    }

    public function create()
    {
        return view('admin.footer.create');
    }

    public function store(FooterRequest $request)
    {
        $input = $request->all();
        Footer::create($input);
        return redirect()->route('footer.index')->with('success', 'Data created successfully');
    }

    public function edit(Footer $footer)
    {
        return view('admin.footer.edit', compact('footer'));
    }

    public function update(FooterRequest $request, Footer $footer)
    {
        $input = $request->all();
        $footer->update($input);
        return redirect()->route('footer.index')->with('success', 'Data updated successfully');
    }

    public function destroy(Footer $footer)
    {
        $this->deleteActiveItem($footer);
        return redirect()->route('footer.index');
    }
}
