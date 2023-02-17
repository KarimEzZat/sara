<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\SeoRequest;
use App\Models\Seo;

class SeoController extends Controller
{
    function __construct()
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
        $seos = Seo::desc()->get();
        return view('admin.seo.index', compact('seos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.seo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeoRequest $request)
    {
        //
        $input = $request->all();

        Seo::create($input);

        return redirect()->route('seo.index')->with('success', 'Data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Seo $seo)
    {
        //
        return view('admin.seo.edit', compact('seo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SeoRequest $request, Seo $seo)
    {
        //
        $input = $request->all();

        $seo->update($input);
        return redirect()->route('seo.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seo $seo)
    {
        //
        $seo->delete();
        return redirect()->route('seo.index')->with('success', 'Data Deleted successfully');
    }
}
