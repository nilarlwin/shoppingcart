<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backends.products.show',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.products.create');
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
            'title'=>'required',
            'price'=>'required',
            'image'=>'required',
            'type'=>'required',
            'code'=>'required',
            'description'=>'required'
        ]);
        $file = $request -> file('image');
        $fileName = rand ().$file -> getClientOriginalName();
        $file -> move (public_path('assets/product-image'),$fileName);
        Product::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'image'=>$fileName,
            'item_type'=>$request->type,
            'item_code'=>$request->code,
            'description'=>$request->description
        ]);
        return redirect(route('product.show'))->with('status','Product Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backends.products.edit',['product'=>$product]);
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
           'title'=>'required',
           'price'=>'required',
           'image'=>'required',
           'type'=>'required',
           'code'=>'required',
           'description'=>'required'
       ]);
       $file = $request -> file('image');
        $fileName = rand ().$file -> getClientOriginalName();
        $file -> move (public_path('assets/product-image'),$fileName);
        Product::find($id)->update([
            'title'=>$request->title,
            'price'=>$request->price,
            'image'=>$fileName,
            'item_type'=>$request->type,
            'item_code'=>$request->code,
            'description'=>$request->description
        ]);
        return redirect(route('product.show'))->with('status','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back()->with('status','Product Deleted Successfully');
    }
}
