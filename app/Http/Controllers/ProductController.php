<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
   
    public function index()
    {
        $products=Product::all();
        return view('products.index',compact('products'));
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:161',
            'icon' => 'required|string',
            'description' => 'required|string|max:130'
        ]);

        if ($validator->fails()) {
            return redirect()->route('products')
                ->withErrors($validator)
                ->withInput();
        }

        $product = new Product;
        $product->name = $request->name;
        $product->icon = $request->icon;
        $product->description= $request->description;
        $product->save();
        return redirect()->route('products')->with('success', 'Successfully updated Post');
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->icon = $request->icon;
        $product->description= $request->description;
        $product->update([$product]);
        return redirect()->route('products')->with('success', 'Successfully updated Post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Successfully deleted Product');
    }
}
