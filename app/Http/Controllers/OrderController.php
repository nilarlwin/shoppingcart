<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\CustomerOrder;

class OrderController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('backends.orders.index',['customers'=>$customers]);
    }
    public function show($id){
        $customer = Customer::find($id);
        $orders = CustomerOrder::where('customer_id',$id)->get();
        return view('backends.orders.show',['orders'=>$orders],['customer'=>$customer]);
    }
    public function destroy($id){
        $orders = CustomerOrder::where('customer_id',$id)->get();
        foreach($orders as $order){
            CustomerOrder::destroy($order->id);
        }
        Customer::destroy($id);
        return redirect()->back()->with('status','Order Deleted Successfully');
    }
}
