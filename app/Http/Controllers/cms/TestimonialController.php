<?php

namespace App\Http\Controllers\Cms;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTestimonial = Testimonial::paginate(5);
        return view('cms.testimonial.index', compact('dataTestimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'testimony' => 'required|string',
        ]);

        Testimonial::create([
            'title' => $request->title,
            'name' => $request->name,
            'company' => $request->company,
            'testimony' => $request->testimony,
        ]);

        return redirect(route('testimonial.index'))->with('success', 'Data added successfully');
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
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('cms.testimonial.update', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'testimony' => 'required|string',
        ]);

        $testimonial = Testimonial::find($id);
        $testimonial->update([
            'title' => $request->title,
            'name' => $request->name,
            'company' => $request->company,
            'testimony' => $request->testimony,
        ]);

        return redirect(route('testimonial.index'))->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect(route('testimonial.index'))->with('success', 'Data deleted successfully');
    }
}
