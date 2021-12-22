<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show(){
       $contactcustomers = Contact::all();
        return view('backends.contactcustomer.show',['contactcustomers'=>$contactcustomers]);
    }
    public function edit($id){
        
        $contactcustomer = Contact::find($id);
        return view('backends.contactcustomer.edit',['contactcustomer'=>$contactcustomer]);
    }
    public function update(Request $request , $id){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
            'suggestion'=>'required'
        ]);
        Contact::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'suggestion'=>$request->suggestion,
        ]);
        return redirect(route('contactcustomer.show'))->with('status','Contact Customer Updated Successfully');
    }
    public function destroy($id){
        Contact::destroy($id);
        return redirect(route('contactcustomer.show'))->with('status','Contact Customer Deleted Successfully');
    }
}
