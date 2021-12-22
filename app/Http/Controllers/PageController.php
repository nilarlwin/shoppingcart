<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Contact;

class PageController extends Controller
{
    public function boytshirt(){
        $products = Product::where('item_type','Boy-Tshirt')->paginate(3);
        return view('frontends.boytshirt',['products'=>$products]);
    }
    public function boysshirt(){
        $products = Product::where('item_type','Boy-Short-Shirt')->paginate(3);
        return view('frontends.boysshirt',['products'=>$products]);
    }
    public function boylshirt(){
        $products = Product::where('item_type','Boy-Long-Shirt')->paginate(3);
        return view('frontends.boylshirt',['products'=>$products]);
    }
    public function girltshirt(){
        $products = Product::where('item_type','Girl-Tshirt')->paginate(3);
        return view('frontends.girltshirt',['products'=>$products]);
    }
    public function girldress(){
        $products = Product::where('item_type','Girl-Dress')->paginate(3);
        return view('frontends.girldress',['products'=>$products]);
    }
    public function girllshirt(){
        $products = Product::where('item_type','Girl-Long-Shirt')->paginate(3);
        return view('frontends.girllshirt',['products'=>$products]);
    }
    public function about(){
        return view('frontends.about');
    }
    public function contact(){
        return view('frontends.contact');
    }
    public function contactus(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
            'suggestion'=>'required'
        ]);
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'suggestion'=>$request->suggestion
        ]);
        return redirect()->back()->with('status','Your information and suggestion well received ! we will contact to you soon.');
    }
}
