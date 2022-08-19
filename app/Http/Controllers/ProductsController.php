<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =Products::latest()->where('status','2')->get();

        $variables = [
            'menu'=>"products_index",
            'products'=>$products,

        ];
        return view('products.index')->with($variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variables = [
            'menu'=>"products_index",

        ];
        return view('products.create')->with($variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= new Products();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->image_url='prueba';
        $product->category=$request->category;

        $product->price=$request->price;
        $product->status='2';

        if($product->save()===true)
        {
          return back()->with('success','Se ha agregado exitosamente el producto.');

        }
        else
        {
           return back()->with('error','No se pudo agregar el producto.');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {

        $product->status='-2';
        if($product->save())
        {
            return back()->with('success_product_deleted','Se ha eliminado exitosamente el producto '.$product->name.'.');
        }
        else
        {
            return back()->withErrors('No se puedo eliminar el producto seleccionado.');
        }
    }
}
