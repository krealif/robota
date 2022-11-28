<?php

namespace App\Http\Controllers\Cms;

use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPricing = Pricing::paginate(5);
        return view('cms.pricing.index', compact('dataPricing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pricing.create');
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
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'list' => 'required|string',
        ]);
        
        $list = collect(json_decode($request->list))->pluck('value')->toJson();
        $this->removeRecommended($request->boolean('recommended'));

        Pricing::create([
            'name' => $request->name,
            'price' => $request->price,
            'list' => $list,
            'recommended' => $request->boolean('recommended')
        ]);
        return redirect(route('pricing.index'))->with('success', 'Data added successfully');
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
        $pricing = Pricing::find($id);
        return view('cms.pricing.update', compact('pricing'));
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
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'list' => 'required|string',
        ]);

        $list = collect(json_decode($request->list))->pluck('value')->toJson();
        $this->removeRecommended($request->boolean('recommended'));

        $pricing = Pricing::find($id);
        $pricing->update([
            'name' => $request->name,
            'price' => $request->price,
            'list' => $list,
            'recommended' => $request->boolean('recommended')
        ]);
        return redirect(route('pricing.index'))->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pricing = Pricing::find($id);
        $pricing->delete();
        return redirect(route('pricing.index'))->with('success', 'Data deleted successfully');
    }

    function removeRecommended($r) {
        if ($r) {
            $pricing = Pricing::where('recommended', 'like', '%1%')->first();
            if ($pricing) {
                $pricing->update([
                    'recommended' => 0,
                ]);
            }
        }
    }
}
