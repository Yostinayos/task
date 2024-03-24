<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->with('images')->paginate(2);
      
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    { 

        $request=$request->validated();
        $product= new Product;
        $product->name= $request->name;
        
        $product->category_id= $request->category_id;

           $product->save();

        return redirect('/')->with('add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {


         $product= Product::with('category')->with('images')->find($product->id);
        return view('products.show', compact('product'));
      

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}