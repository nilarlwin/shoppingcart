<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class FrontendsController extends Controller
{
    public function index(){
        $products = Product::where('item_type','Boy-Short-Shirt')->take(3)->get();
        //session()->forget('carts');
        return view('frontends.index',['products'=>$products]);
    }
    public function show(){
        $products = Product::paginate(6);
        return view('frontends.detail',['products'=>$products]);
    }
}
