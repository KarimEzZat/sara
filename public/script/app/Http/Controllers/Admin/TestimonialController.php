<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::desc()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        //
        $input = $request->all();
        $image = $this->uploadSingleFile('image/testimonial', 'image');
        $input['image'] = $image;
        Testimonial::create($input);
        return redirect()->route('testimonials.index')->with('success', 'Data created successfully');
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
    public function edit(Testimonial $testimonial)
    {
        //
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        //
        $input = $request->all();
        $image = $this->uploadSingleFile('image/testimonial', 'image');
        if ($image) {
            $this->deleteFile('image/testimonial/', $testimonial->image);
            $input['image'] = $image;
        }
        $testimonial->update($input);
        return redirect()->route('testimonials.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        $testimonial->delete();
        $this->deleteFile('image/testimonial/', $testimonial->image);
        return redirect()->route('testimonials.index')->with('success', 'Data deleted successfully');
    }
}
