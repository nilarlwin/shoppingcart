<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function index(){
        $carts = Session::get('carts');
        return view('frontends.viewcart',['carts'=>$carts]);
     }
     public function create($id){
        $product = Product::find($id);
        if(Session::exists('carts')){
            $cart = Session::get('carts');
            $cart[$id] = [
                'title'=>$product->title,
                'image'=>$product->image,
                'price'=>$product->price,
                'description'=>$product->description,
                'qty'  =>1
            ];
            Session::put('carts',$cart); 
        }else{
            Session::put('carts',[
             $id => [
                 'title'=>$product->title,
                 'image' =>$product->image,
                 'price' =>$product->price,
                 'description'=>$product->description,
                 'qty'   =>1
             ]
            ]);
        }
        $count = count(Session::get('carts'));
       // echo $count;
        Session::put('count',$count);
        return redirect()->back();
       // return Session::get('carts');
    }
    public function add($key){
        $carts = Session::get('carts');
        $carts[$key]['qty']++;
        Session::put('carts',$carts);
        return redirect()->back();
    }
    public function subtract($key){
       $carts = Session::get('carts');
       if($carts[$key]['qty'] != 1){
        $carts[$key]['qty']--;
       }
       Session::put('carts',$carts);
       return redirect()->back();
    }
    public function delete($key){
       $carts = Session::get('carts');
       unset($carts[$key]);
       Session::put('carts',$carts);
       return redirect()->back();
    }
    public function checkOut(Request $request){
       $request->validate([
         'name'=>'required',
         'phone'=>'required',
         'address'=>'required'
       ]);
       $customer = Customer::create([
           'name'=>$request->name,
           'phone'=>$request->phone,
           'address'=>$request->address
       ]);
       $carts = Session::get('carts');
       foreach($carts as $cart){
           CustomerOrder::create([
               'image'=>$cart['image'],
               'title'=>$cart['title'],
               'qty'  =>$cart['qty'],
               'price'=>$cart['price'],
               'customer_id'=>$customer->id
           ]);
       }
       Session::forget('carts');
       return redirect(route('cart.message'));
    }
    public function message(){
        return view('frontends.message');
    }
}
