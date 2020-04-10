<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Categories::all();
        $products= Products::all();
        return view('products.index', compact('categories'), compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Categories::all();
        $products= Products::all();
        return view('products.create', compact('categories','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products();
        $product->name = $request->input('productName');
        $product->stock = $request->input('productStock');
        $product->price = $request->input('productPrice');
        $product->category_id = $request->input('productCategoryId');
        $product->save();
        return redirect('/products');
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
        $categories= Categories::all();
        $product = Products::find($id);
        if(isset($product)){
            return view('products.edit', compact('product', 'categories'));
        }
        return redirect('/products');
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
        $product = Products::find($id);
        if(isset($product)){
            $product->name = $request->input('productName');
            $product->stock = $request->input('productStock');
            $product->price = $request->input('productPrice');
            $product->category_id = $request->input('productCategoryId');

            $product->save();
        }
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        if(isset($product)) {
            $product->delete();
        }
        return redirect('/products');
    }
}
