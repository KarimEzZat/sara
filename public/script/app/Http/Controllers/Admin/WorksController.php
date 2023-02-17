<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateWorksRequest;
use App\Http\Requests\WorksRequest;
use App\Models\Category;
use App\Models\Work;

class WorksController extends Controller
{
    public function __construct()
    {
        $this->adminMiddleware();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $works = Work::desc()->get();
        return view('admin.portfolio.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.portfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorksRequest $request)
    {
        //
        $input = $request->all();
        $image = $this->uploadSingleFile('image/works', 'image');
        $input['image'] = $image;
        Work::create($input);
        return redirect()->route('works.index')->with('success', 'Data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        //
        $categories = Category::all();
        return view('admin.portfolio.edit', compact('work', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorksRequest $request, Work $work)
    {
        //
        $input = $request->all();
        $image = $this->uploadSingleFile('image/works/', 'image');
        if ($image) {
            $this->deleteFile('image/works/', $work->image);
            $input['image'] = $image;
        }
        $work->update($input);
        return redirect()->route('works.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        //
        $work->delete();
        $this->deleteFile('image/works/', $work->image);
        return redirect()->route('works.index')->with('success', 'Data deleted successfully');
    }
}
