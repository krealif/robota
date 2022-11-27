<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Feature;
use App\Utilities\Helper;

class FeatureController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dataFeature = Feature::paginate(5);
        return view('cms.feature.index', compact('dataFeature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.feature.create');
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
            'desc' => 'required|string',
            'image' => 'required',
        ]);

        $filename = Helper::storeImage('feature', $request->image);

        Feature::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $filename,
        ]);

        return redirect(route('feature.index'))->with('success', 'Data added successfully');
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
        $feature = Feature::find($id);
        return view('cms.feature.update', compact('feature'));
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
            'desc' => 'required|string',
        ]);

        $feature = Feature::find($id);
        $feature->update([
            'title' => $request->title,
            'desc' => $request->desc,
        ]);

        if ($request->filled('image')) {
            $filename = Helper::storeImage('feature', $request->image);
            Storage::disk('img')->delete($feature->image);
            $feature->update([
                'image' => $filename
            ]);
        }

        return redirect(route('feature.index'))->with('success', 'Data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        Storage::disk('img')->delete($feature->image);
        return redirect(route('feature.index'))->with('success', 'Data deleted successfully');
    }
}
