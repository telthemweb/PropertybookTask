<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricings=Package::all();
        return view('pricing.index',compact('pricings'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $pricing = new Package;
        $pricing->title = $request->title;
        $pricing->price = $request->price;
        $pricing->save();
        return redirect()->route('prices')->with('success', 'Successfully added Pricing');
    }

  

    public function edit($id)
    {
        $pricing = Package::findOrFail($id);
        return view('pricing.edit', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $pricing = Package::findOrFail($id);
        $pricing->title = $request->title;
        $pricing->price = $request->price;
        $pricing->save();
        return redirect()->route('prices')->with('success', 'Successfully updated Pricing');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pricing = Package::findOrFail($id);
        $pricing->delete();
        return redirect()->back()->with('success', 'Successfully deleted Pricing');
    }
}
