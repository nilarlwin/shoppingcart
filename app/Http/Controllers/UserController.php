<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backends.users.show',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.users.create');
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
           'name'=>'required',
           'email'=>'required',
           'password'=>'required',
           'image'=>'required'
       ]);
       $file = $request -> file('image');
        $fileName = rand ().$file -> getClientOriginalName();
        $file -> move (public_path('assets/profile-image'),$fileName);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'image'=>$fileName
        ]);
        return redirect(route('user.show'))->with('status','User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('backends.users.index',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        if($id == auth()->id() ) {
        $user = User::find($id);
        return view('backends.users.edit',['user'=>$user]);
        }else{
            return redirect(route('user.show'));
        }
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'image'=>'required'
        ]);
        $file = $request -> file('image');
         $fileName = rand ().$file -> getClientOriginalName();
         $file -> move (public_path('assets/profile-image'),$fileName);
         User::find($id)->update([
             'name'=>$request->name,
             'email'=>$request->email,
             'password'=>Hash::make($request->password),
             'image'=>$fileName
         ]);
         return redirect(route('user.show'))->with('status','User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('status','User Deleted Successfully');
    }
}
