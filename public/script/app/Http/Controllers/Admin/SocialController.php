<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use App\Models\Social;

class SocialController extends Controller
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
        $socials = Social::all();
        return view('admin.socials.index', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.socials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialRequest $request)
    {
        //
        $input = $request->all();

        Social::create($input);

        return redirect()->route('socials.index')->with('success', 'Data created successfully');
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
    public function edit(Social $social)
    {
        //
        return view('admin.socials.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SocialRequest $request, Social $social)
    {
        //
        $input = $request->all();

        $social->update($input);
        return redirect()->route('socials.index')->with('success', 'Data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        //
        $social->delete();
        return redirect()->route('socials.index')->with('success', 'Data Deleted successfully');
    }
}
